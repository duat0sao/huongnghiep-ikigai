// Đối tượng Validator
function Validator(options) {

    function getParent(element, selector) {
        while (element.parentElement) {
            if (element.parentElement.matches(selector)) {
                return element.parentElement;
            }
            element = element.parentElement;
        }
    }

    var selectorRules = {}

    // Hàm thực hiện validate
    function Validate(inputElement, rule) {
        var erroElement = getParent(inputElement, options.formGroupSelector).querySelector(options.errorMessage)
        var errorMessage

        // lấy ra các rules của selector
        var rules = selectorRules[rule.selector]

        // lặp qua từng rule
        // nếu có lỗi thì dừng việc kiểm tra
        for (var i = 0; i < rules.length; i++) {
            switch (inputElement.type) {
                case 'radio':
                case 'checkbox':
                    errorMessage = rules[i](
                        formElement.querySelector(rule.selector + ':checked'))
                    break
                default:
                    errorMessage = rules[i](inputElement.value)
            }
            if(errorMessage) break;
        }
                    
        if(errorMessage) {
            erroElement.innerText = errorMessage
            getParent(inputElement, options.formGroupSelector).classList.add('invalid')
        }
        else {
            erroElement.innerText = ""
            getParent(inputElement, options.formGroupSelector).classList.remove('invalid')
        }
        return !errorMessage
    }

    // lấy element của form
    var formElement = document.querySelector(options.form);
    if(formElement) {

        // khi submit form
        formElement.onsubmit = function (e) {
            e.preventDefault()

            var formIsvalid = true;

            options.rules.forEach(function(rule) {
                var inputElement = document.querySelector(rule.selector)
                var isValid = Validate(inputElement, rule)
                if(!isValid) [
                    formIsvalid = false
                ]
            })

            if(formIsvalid) {
                // Trường hợp submit với javascript
                if (typeof options.onSubmit == 'function') {
                    var enableInputs = formElement.querySelectorAll('[name]')
                    var formValues = Array.from(enableInputs).reduce(function (values, input) {

                        switch (input.type) {
                            case 'radio':
                                if (input.matches(':checked')){
                                    values[input.name] = input.value
                                } 
                                break
                            case 'checkbox':  
                                if (!input.matches(':checked')) {
                                    values[input.name] = ''
                                    return values
                                }
                                if (!Array.isArray(values[input.name])) {
                                    values[input.name] = []
                                }
                                values[input.name].push(input.value)
                                break
                            case 'file':
                                values[input.name] = input.files
                                break
                            default:
                                values[input.name] = input.value
                        }
 
                        return values
                    }, {})
                    options.onSubmit(formValues)
                } 
                // trường hợp submit vơi hành vi mặc định
                else {
                    formElement.submit()
                }
            }
        }

        // lặp qua mỗi rule và xử lý
        options.rules.forEach(function(rule) {

            // lưu lại các rule cho mỗi input
            if(!Array.isArray(selectorRules[rule.selector])) {
                selectorRules[rule.selector] = [rule.test]
            } else {
                selectorRules[rule.selector].push(rule.test)
            }

            var inputElements = formElement.querySelectorAll(rule.selector)

            Array.from(inputElements).forEach(function(inputElement) {
                inputElement.onblur = function() {
                    Validate(inputElement, rule)
                }

                // Xử lý khi người dùng nhập
                inputElement.oninput = function() {
                    var erroElement = getParent(inputElement, options.formGroupSelector).querySelector(options.errorMessage)
                    erroElement.innerText = ""
                    getParent(inputElement, options.formGroupSelector).classList.remove('invalid')
                }
            })
        })
    }

}

// Định nghĩa rules
// Nguyên tắc các rules:
// Khi có lỗi => Trả ra messge lỗi
// Khi hợp lệ trả undefined
Validator.isRequired = function (selector, message) {
    return {
        selector: selector,
        test: function(value) {
            return value ? undefined : message || 'Vui lòng nhập trường này'
        }
    }
}

Validator.isEmail = function (selector, message) {
    return {
        selector: selector,
        test: function(value){
            var checkEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
            return checkEmail.test(value) ? undefined : message || 'Trường này phải là email'
        }
    }
}

Validator.minLength = function (selector, min, message) {
    return {
        selector: selector,
        test: function(value){
            return value.length >= min ? undefined : message || `Vui lòng nhập tối thiểu ${min} ký tự`
        }
    }
}

Validator.isConfirmed = function (selector, getConfirmValue , message) {
    return {
        selector: selector,
        test: function(value){
            return value === getConfirmValue() ? undefined : message || 'Giá trị nhập vào không chính xác'
        }
    }
}