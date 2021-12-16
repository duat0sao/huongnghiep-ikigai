var rules = []
for (var i = 1; i <= dataQuestion.length; i++) {
  rules.push(Validator.isRequired(`input[name="question${i}"]`, "Vui lòng chọn đủ đáp án"),)
}

Validator({
        form: '#form-1',
        formGroupSelector: '.form-group1',
        errorMessage: '.form-message',
        rules: rules,
      onSubmit: function(data) {
        // Call API
        var nhom1 = 0, nhom2 = 0, nhom3 = 0, nhom4 = 0
        // console.log(data);
        for (var key in data) {
        	if (data[key] == 'a') nhom1++
        	else if (data[key] == 'b') nhom2++
        	else if (data[key] == 'c') nhom3++
        	else nhom4++
        }
    console.log(nhom1)
    console.log(nhom2)
    console.log(nhom3)
    console.log(nhom4)

        
var params = new URLSearchParams(location.search);
var aid = params.get('id');
console.log(aid)

var hiam = [nhom1, nhom2, nhom3, nhom4, aid];

    //truyen du lieu sang xuly.php va day vao db
    $.ajax({
      url: "xuly.php",
      type: "POST",
      
      data:{datacandi:hiam}
     
      
      
    });



    var xValues = ["Nhóm A", "Nhóm B", "Nhóm C", "Nhóm D"];
    var yValues = [nhom1, nhom2, nhom3, nhom4];
    var barColors = ["red", "green","blue","orange"];

    
    var max = Math.max(nhom1, nhom2, nhom3, nhom4)
    if(max == nhom1) {
    	document.querySelector(".hang").innerHTML = `<canvas id="myChart" style="width:100%;max-width:600px; height: 300px"></canvas>
        <div class="form-group2 mt-2 col-xl-10 col-lg-9 col-md-8 col-sm-8" style="text-align: justify; margin-bottom: 40px;"><div class="kq"><b>•Kết quả:</b> Người Thủ lĩnh <span class="nhoma">(Nhóm A)</span>
                    </div> <div class="mota"><b>•Mô tả:</b> Những người nằm ở nhóm này quan trọng kết quả hoàn thành. Họ luôn tự tin và có động lực cạnh tranh để chiến thắng hoặc đạt được thành công. Họ luôn chấp nhận thử thách và hành động tức thì để đạt được kết quả. Những người thuộc nhóm Thủ lĩnh thường được mô tả là mạnh mẽ, tự tin, nhanh nhẹn, luôn tiếp cận vấn đề một cách trực tiếp. Tuy nhiên, điểm trừ của những người thuộc nhóm Thủ lĩnh là đôi khi họ bị giới hạn bởi sự vô tâm đối với người khác, thiếu kiên nhẫn và hay hoài nghi. Đôi khi họ cũng được cho là dễ bị tổn thương.
                    </div><div><a class="btn" href="../toigioi.php?id=${aid}">Home</a></div>`
      }
      else if(max == nhom2) {
      	document.querySelector(".hang").innerHTML = `<canvas id="myChart" style="width:100%;max-width:600px; height: 300px"></canvas>
        <div class="form-group2 mt-2 col-xl-10 col-lg-9 col-md-8 col-sm-8" style="text-align: justify; margin-bottom: 40px;"><div class="kq"><b>•Kết quả:</b> Người tạo ảnh hưởng <span class="nhomb">(Nhóm B)</span>
                    </div> <div class="mota"><b>•Mô tả:</b> Người thuộc nhóm này chú trọng vào việc tạo ra ảnh hưởng hoặc thuyết phục người khác bằng sự cởi mở và những mối quan hệ của mình. Họ thường được mô tả là những người có sức thuyết phục, nhiệt tình, ấm áp, luôn lạc quan và có niềm tin vào người khác. Phong cách làm việc của họ luôn thể hiện sự hợp tác và nhiệt tình. Những người Tạo ảnh hưởng thường được thúc đẩy bởi sự công nhận xã hội (hoặc một nhóm người trong xã hội), vào những hoạt động nhóm và sự phát triển các mối quan hệ. Chính vì vậy mà họ sẽ sợ bị mất sự ảnh hưởng, bị từ chối hoặc bị bỏ qua.
                    </div><div><a class="btn" href="../toigioi.php?id=${aid}">Home</a></div>`
      }
      else if(max == nhom3) {
      	document.querySelector(".hang").innerHTML = `<canvas id="myChart" style="width:100%;max-width:600px; height: 300px"></canvas>
        <div class="form-group2 mt-2 col-xl-10 col-lg-9 col-md-8 col-sm-8" style="text-align: justify; margin-bottom: 40px;"><div class="kq"><b>•Kết quả:</b> Người Kiên định <span class="nhomc">(Nhóm C)</span>
                    </div> <div class="mota"><b>•Mô tả:</b> Những người thuộc nhóm này thường chú trọng vào sự hợp tác, chân thành, tin cậy. Họ thường tìm động lực thúc đẩy từ sự cộng tác, phối hợp, đánh giá chân thành và hướng đến duy trì sự ổn định. Những người Kiên Định thường được mô tả là bình tĩnh, kiên nhẫn, có thể lường trước sự việc, ổn định và nhất quán. Họ cũng có thể bị giới hạn bởi sự thiếu quyết đoán, sợ thay đổi, sợ sự mất ổn định và bị xúc phạm. Tuy nhiên, bạn có thể tin tưởng vào giá trị trung thành và sự đảm bảo của những người Kiên Định.
                    </div><div><a class="btn" href="../toigioi.php?id=${aid}">Home</a></div>`
      } else {
      	document.querySelector(".hang").innerHTML = `<canvas id="myChart" style="width:100%;max-width:600px; height: 300px"></canvas>
        <div class="form-group2 mt-2 col-xl-10 col-lg-9 col-md-8 col-sm-8" style="text-align: justify; margin-bottom: 40px;"><div class="kq"><b>•Kết quả:</b> Người Tuân thủ <span class="nhomd">(Nhóm D)</span>
                    </div> <div class="mota"><b>•Mô tả:</b> Những người thuộc nhóm Tuân thủ này thường chú trọng vào chất lượng và độ chính xác, chuyên môn, năng lực cá nhân. Họ thường tìm thấy động lực từ những cơ hội để đạt được kiến thức, những cơ hội giúp họ thể hiện được chuyên môn cá nhân và tạo ra những sản phẩm có chất lượng. Người Tuân thủ để ý đến độ chính xác trong công việc, họ luôn muốn duy trì sự ổn định trong công việc. Những người Tuân thủ cũng thường được được mô tả là người cẩn thận, thận trọng, làm việc có hệ thống, chính xác, lịch sự và biết cách ngoại giao. Tuy nhiên, họ có thể bị giới hạn bởi việc bị quá tải, bản thân bị cô lập, những lời chỉ trích và mắc sai lầm.
                    </div><div><a class="btn" href="../toigioi.php?id=${aid}">Home</a></div>`
      }

    new Chart("myChart", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Tích cách của bạn"
            }
          }
        });

    }
    




    })