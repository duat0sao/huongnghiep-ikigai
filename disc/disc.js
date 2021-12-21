
var nhoma = [
	
		 "Đạt được mục tiêu xuất sắc.",
		
	
		 "Độc lập.",
	
	
		 "Hướng đến những cơ hội mới.",
	
	
		 "Tôi thích nói lên suy nghĩ của mình.",
		

		 "Tôi giỏi thuyết phục mọi người",
		
	
		 "Tôi rất bình thường trong thói quen của tôi.",
	
	
		 "Tôi có sự nhận thức và hiểu biết sâu sắc về mọi người xung quanh.",
	
	
		 "Tôi có thể dễ dàng thuyết phục người khác.",
	
	
		 "Tôi đưa ra quyết định nhanh chóng.",
	
	
		 "Tôi nóng nảy bồn chồn.",
		
	
		 "Mọi người không thể ngăn cản tôi.",
	
	
		 "Bỏ dở công việc.",
	
	
		 "Làm việc với tiểu tiết.",
	
	
		 "Phải đưa ra quyết định nhanh chóng."
];
var nhomb = [		
		 "Đạt được chiến thắng bằng sự tinh tế.",
	
		 "Có tình bạn tốt và luôn cảm thấy hạnh phúc.",
			
		 "Có uy tín trong cộng đồng hoặc đạt được sự nổi tiếng.",
				
		 "Tôi rất thân thiện.",
		
		 "Tôi có xu hướng trở thành một người thân thiện.",
		
		 "Tôi thích trò chuyện với mọi người",
		
		 "Tôi luôn sẵn sàng làm những điều mới - chấp nhận rủi ro.",
	
		 "Tôi không thích khoe khoang.",
	
		 "Tôi luôn cố gắng làm thật tốt công việc của mình.",
		
		 "Tôi rất tự tin và có sức thuyết phục.",	
		 "Mọi người thường chú ý đến tôi.",
		
		 "Thích ứng với môi trường luôn thay đổi hoặc những mục tiêu được đặt ra không rõ ràng.",
		
		 "Tập trung trong thời gian dài.",
	
		 "Phải cạnh tranh/đối đầu với người khác."
];

var nhomc = [
	 "Đạt được thành tích cá nhân.",
		
	 "Đạt được sự ủng hộ của một nhóm người.",
		
 "Làm việc trong môi trường được kiểm soát và không có nhiều sự thay đổi.",
	
	"Tôi có xu hướng giữ cảm xúc của mình với chính mình.",
   "Tôi là một người rất kiên quyết",
		
	 "Tôi đưa ra quyết định một cách dứt khoát",
		
	 "Tôi là một người ôn hòa chứ không phải là một người cực đoan.",
	
	 "Tôi là một người lịch thiệp.",
		
		"Tôi sống thật với cảm xúc của mình.",
	
	 "Tôi thuộc tuýp người rất khiêm tốn.",
		
	 "Tôi là một người dễ chịu.",
	
 "Nói chuyện trực tiếp và thẳng thắn.",
	
	 "Phải làm nhiều việc cùng một lúc.",
	
	 "Bị kiểm soát."
];
var nhomd = [
	 "Có quy trình làm việc khách quan, đạt độ chính xác cao.",
   "Phong thái ổn định và tin cậy.",
	 "Phát triển cá nhân.",
	 "Độ chính xác rất quan trọng đối với tôi.",
	 "Tôi có xu hướng là một người thận trọng.",
	 "Tôi kiểm soát cảm xúc của mình tốt.",
	 "Mọi người thấy tôi thoải mái và dễ gần.",
	 "Tôi thường có cách riêng của mình.",
	 "Tôi thích mọi thứ phải rất gọn gàng và ngăn nắp.",
	 "Tôi luôn chú ý đến những gì người khác nói.",
	  "Tôi thích xử lý mọi việc bằng ngoại giao.",
	 "Thể hiện sự kiên nhẫn.",
	 "Tham gia các sự kiện xã hội.",
	 "Nghe người khác nói lan man"
];
// let scores = {
//   realistic: 0,
//   investigate: 0,
//   artistic: 0,
//   social: 0,
//   enterprising: 0,
//   conventional: 0
// };

let params = new URLSearchParams(location.search);
let aid = params.get('id');



/* 
index 0 => realistic
index 1 => investigate
index 2 => artistic
index 3 => social
index 4 => enterprising
index 5 => conventional
*/



const questionText1 = document.querySelector(".question1");  
const questionText2 = document.querySelector(".question2");  
const questionText3 = document.querySelector(".question3");  
const questionText4 = document.querySelector(".question4");  
const buttons = document.querySelectorAll(".answers button");
let questionsIndex = 0;
let scoresIndex = 0;


var nhom1 = 0, nhom2 = 0, nhom3 = 0, nhom4 = 0

function printQuestion() {
  
  questionText1.textContent = nhoma[questionsIndex];
  questionText2.textContent = nhomb[questionsIndex];
  questionText3.textContent = nhomc[questionsIndex];
  questionText4.textContent = nhomd[questionsIndex];
  

}

function nextQuestion() {  // câu hỏi tiếp theo
  questionsIndex += 1;
}



function removeQuestions() {
  questionText1.style.display = "none";
  questionText2.style.display = "none";
  questionText3.style.display = "none";
  questionText4.style.display = "none"
  
  
}

function resultScreen() {
  removeQuestions();

  const result = document.querySelector(".result");
  maxNhom = Math.max(nhom1,nhom2,nhom3,nhom4)
  switch (maxNhom){
    case nhom1:
      var name = "Người Thủ lĩnh";
      var skill1 = "Những người nằm ở nhóm này quan trọng kết quả hoàn thành. Họ luôn tự tin và có động lực cạnh tranh để chiến thắng hoặc đạt được thành công. Họ luôn chấp nhận thử thách và hành động tức thì để đạt được kết quả. Những người thuộc nhóm Thủ lĩnh thường được mô tả là mạnh mẽ, tự tin, nhanh nhẹn, luôn tiếp cận vấn đề một cách trực tiếp. Tuy nhiên, điểm trừ của những người thuộc nhóm Thủ lĩnh là đôi khi họ bị giới hạn bởi sự vô tâm đối với người khác, thiếu kiên nhẫn và hay hoài nghi. Đôi khi họ cũng được cho là dễ bị tổn thương.";
      break;
    case nhom2:
      var name = "Người tạo ảnh hưởng";
      var skill1 = "Người thuộc nhóm này chú trọng vào việc tạo ra ảnh hưởng hoặc thuyết phục người khác bằng sự cởi mở và những mối quan hệ của mình. Họ thường được mô tả là những người có sức thuyết phục, nhiệt tình, ấm áp, luôn lạc quan và có niềm tin vào người khác. Phong cách làm việc của họ luôn thể hiện sự hợp tác và nhiệt tình. Những người Tạo ảnh hưởng thường được thúc đẩy bởi sự công nhận xã hội (hoặc một nhóm người trong xã hội), vào những hoạt động nhóm và sự phát triển các mối quan hệ. Chính vì vậy mà họ sẽ sợ bị mất sự ảnh hưởng, bị từ chối hoặc bị bỏ qua.";
      break;
    case nhom3:
      var name =" Người Kiên định ";
      var skill1 ="Những người thuộc nhóm này thường chú trọng vào sự hợp tác, chân thành, tin cậy. Họ thường tìm động lực thúc đẩy từ sự cộng tác, phối hợp, đánh giá chân thành và hướng đến duy trì sự ổn định. Những người Kiên Định thường được mô tả là bình tĩnh, kiên nhẫn, có thể lường trước sự việc, ổn định và nhất quán. Họ cũng có thể bị giới hạn bởi sự thiếu quyết đoán, sợ thay đổi, sợ sự mất ổn định và bị xúc phạm. Tuy nhiên, bạn có thể tin tưởng vào giá trị trung thành và sự đảm bảo của những người Kiên Định.";
      break;
    case nhom4:
      var name ="Người Tuân thủ";
      var skill1 ="Những người thuộc nhóm Tuân thủ này thường chú trọng vào chất lượng và độ chính xác, chuyên môn, năng lực cá nhân. Họ thường tìm thấy động lực từ những cơ hội để đạt được kiến thức, những cơ hội giúp họ thể hiện được chuyên môn cá nhân và tạo ra những sản phẩm có chất lượng. Người Tuân thủ để ý đến độ chính xác trong công việc, họ luôn muốn duy trì sự ổn định trong công việc. Những người Tuân thủ cũng thường được được mô tả là người cẩn thận, thận trọng, làm việc có hệ thống, chính xác, lịch sự và biết cách ngoại giao. Tuy nhiên, họ có thể bị giới hạn bởi việc bị quá tải, bản thân bị cô lập, những lời chỉ trích và mắc sai lầm.";
      break;

  }



  //   Print Result
  document.getElementById("thutu").style.display = "none";
  document.getElementById("h22").style.display = "none";
  document.getElementById("h223").style.display = "none";
  document.getElementById("taga").style.display = "none";
  document.getElementById("hello").style.display = "block";
  document.getElementById("resultIntro").style.display = "block";
  let resultName = document.createElement("h2");
  result.classList.add("text-center");


  resultName.textContent = name;
  let resultSkill1 = document.createElement("p");
  resultSkill1.textContent = skill1;

 

  result.append(resultName);
  result.append(resultSkill1);


  result.style.display = "block";
}

function printCanvas() {
  var xValues = ["Nhóm D", "Nhóm I", "Nhóm S", "Nhóm C"];
  var yValues = [nhom1, nhom2, nhom3, nhom4];
  var barColors = ["red", "green","blue","orange"];

    document.querySelector(".container1").classList.remove("hide")

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
              text: "Tích cách của bạn",
              fontSize:26
            },
            responsive: true,
            maintainAspectRatio: false
          }
        });

}




function main() {
  
  printQuestion();
  document.getElementById("thutu").innerHTML = "1/14";
  buttons.forEach(button => {
    button.addEventListener("click", () => {
      let score = button.getAttribute("value");

      if (score == 'a'){
        nhom1++

      } else if(score == 'b'){
        nhom2++

      } else if (score =='c'){
        nhom3++

      } else {
        nhom4++

      }
      
      nextQuestion();
      document.getElementById("thutu").innerHTML = `${questionsIndex+1}/14`;
      
      printQuestion();
     
      if (questionsIndex == nhoma.length) {
        datadatadata = [nhom1, nhom2, nhom3, nhom4, aid];
        
        resultScreen();
        
        printCanvas();
        

        //truyen du lieu sang xuly.php va day vao db
        $.ajax({
          url: "xuly.php",
          type: "POST",
          
          data:{clm: datadatadata}
         
          
          
        });

      }
    });
  });
}



window.onload = main();