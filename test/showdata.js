var dataQuestion = [
	{
		"nhomA" : "Đạt được mục tiêu xuất sắc.",
		"nhomB" : "Đạt được chiến thắng bằng sự tinh tế.",
		"nhomC" : "Đạt được thành tích cá nhân.",
		"nhomD" : "Có quy trình làm việc khách quan, đạt độ chính xác cao.",
	},{
		"nhomA" : "Độc lập.",
		"nhomB" : "Có tình bạn tốt và luôn cảm thấy hạnh phúc.",
		"nhomC" : "Đạt được sự ủng hộ của một nhóm người.",
		"nhomD" : "Phong thái ổn định và tin cậy.",
	},{
		"nhomA" : "Hướng đến những cơ hội mới.",
		"nhomB" : "Có uy tín trong cộng đồng hoặc đạt được sự nổi tiếng.",
		"nhomC" : "Làm việc trong môi trường được kiểm soát và không có nhiều sự thay đổi.",
		"nhomD" : "Phát triển cá nhân.",
	},{
		"nhomA" : "Tôi thích nói lên suy nghĩ của mình.",
		"nhomB" : "Tôi rất thân thiện.",
		"nhomC" : "Tôi có xu hướng giữ cảm xúc của mình với chính mình.",
		"nhomD" : "Độ chính xác rất quan trọng đối với tôi.",
	},{
		"nhomA" : "Tôi giỏi thuyết phục mọi người",
		"nhomB" : "Tôi có xu hướng trở thành một người thân thiện.",
		"nhomC" : "Tôi là một người rất kiên quyết",
		"nhomD" : "Tôi có xu hướng là một người thận trọng.",
	},{
		"nhomA" : "Tôi rất bình thường trong thói quen của tôi.",
		"nhomB" : "Tôi thích trò chuyện với mọi người",
		"nhomC" : "Tôi đưa ra quyết định một cách dứt khoát",
		"nhomD" : "Tôi kiểm soát cảm xúc của mình tốt.",
	},{
		"nhomA" : "Tôi có sự nhận thức và hiểu biết sâu sắc về mọi người xung quanh.",
		"nhomB" : "Tôi luôn sẵn sàng làm những điều mới - chấp nhận rủi ro.",
		"nhomC" : "Tôi là một người ôn hòa chứ không phải là một người cực đoan.",
		"nhomD" : "Mọi người thấy tôi thoải mái và dễ gần.",
	},{
		"nhomA" : "Tôi có thể dễ dàng thuyết phục người khác.",
		"nhomB" : "Tôi không thích khoe khoang.",
		"nhomC" : "Tôi là một người lịch thiệp.",
		"nhomD" : "Tôi thường có cách riêng của mình.",
	},{
		"nhomA" : "Tôi đưa ra quyết định nhanh chóng.",
		"nhomB" : "Tôi luôn cố gắng làm thật tốt công việc của mình.",
		"nhomC" : "Tôi sống thật với cảm xúc của mình.",
		"nhomD" : "Tôi thích mọi thứ phải rất gọn gàng và ngăn nắp.",
	},{
		"nhomA" : "Tôi nóng nảy bồn chồn.",
		"nhomB" : "Tôi rất tự tin và có sức thuyết phục.",
		"nhomC" : "Tôi thuộc tuýp người rất khiêm tốn.",
		"nhomD" : "Tôi luôn chú ý đến những gì người khác nói.",
	},{
		"nhomA" : "Mọi người không thể ngăn cản tôi.",
		"nhomB" : "Mọi người thường chú ý đến tôi.",
		"nhomC" : "Tôi là một loại dễ chịu.",
		"nhomD" : "Tôi thích xử lý mọi việc bằng ngoại giao.",
	},{
		"nhomA" : "Bỏ dở công việc.",
		"nhomB" : "Thích ứng với môi trường luôn thay đổi hoặc những mục tiêu được đặt ra không rõ ràng.",
		"nhomC" : "Nói chuyện trực tiếp và thẳng thắn.",
		"nhomD" : "Thể hiện sự kiên nhẫn.",
	},{
		"nhomA" : "Làm việc với tiểu tiết.",
		"nhomB" : "Tập trung trong thời gian dài.",
		"nhomC" : "Phải làm nhiều việc cùng một lúc.",
		"nhomD" : "Tham gia các sự kiện xã hội.",
	},{
		"nhomA" : "Phải đưa ra quyết định nhanh chóng.",
		"nhomB" : "Phải cạnh tranh/đối đầu với người khác.",
		"nhomC" : "Bị kiểm soát.",
		"nhomD" : "Nghe người khác nói lan man",
	},
]




var newQuestion = dataQuestion.map(function(data, index) {
	return `<div class="form-group1 id${index + 1} hide mb-3">
    		  	
    		  	<label class="form-message"></label>
    		    <div class="cauhoi">
    		    	<input class="form-check-input" type="radio" name="question${index + 1}" value="a">
    		    	<label for="question${index + 1}">${data['nhomA']}</label>
    		    </div>
    		    <div class="cauhoi">
    		    	<input class="form-check-input" type="radio" name="question${index + 1}" value="b">
    		    	<label for="question${index + 1}">${data['nhomB']}</label>
    		    </div>
    		    <div class="cauhoi">
    		    	<input class="form-check-input" type="radio" name="question${index + 1}" value="c">
    		    	<label for="question${index + 1}">${data['nhomC']}</label>
    		    </div>
    		    <div class="cauhoi">
    		    	<input class="form-check-input" type="radio" name="question${index + 1}" value="d">
    		    	<label for="question${index + 1}">${data['nhomD']}</label>
    		    </div>
			</div>
			<div class="question-${index + 1} hide"><h5 class="thutu">Question ${index + 1} of ${dataQuestion.length}</h5></div>
			`
})



$('.content').html(newQuestion.join(''));
$(".id1").removeClass('hide')
$('.question-1').removeClass('hide')