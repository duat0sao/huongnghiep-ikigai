const questions = [
  "Tôi có tính tự lập",
  "Tôi suy nghĩ thực tế",
  "Tôi là người thích nghi với môi trường mới",
  "Tôi có thể vận hành, điều khiển các máy móc thiết bị",
  "Tôi làm các công việc thủ công như gấp giấy, đan, móc",
  "Tôi thích tiếp xúc với thiên nhiên, động vật, cây cỏ",
  "Tôi thích những công việc sử dụng tay chân hơn là trí óc",
  "Tôi thích những công việc thấy ngay kết quả",
  "Tôi thích làm việc ngoài trời hơn là trong phòng học, văn phòng",
  "Tôi có tìm hiểu khám phá nhiều vấn đề mới",
  "Tôi có khả năng phân tích vấn đề",
  "Tôi biết suy nghĩ một cách mạch lạc, chặt chẽ",
  "Tôi thích thực hiện các thí nghiệm hay nghiên cứu",
  "Tôi có khả năng tổng hợp, khái quát, suy đoán những vấn đề",
  "Tôi thích những hoạt động điều tra, phân loại, kiểm tra, đánh giá",
  "Tôi tự tổ chức công việc mình phái làm",
  "Tôi thích suy nghĩ về những vấn đề phức tạp, làm những công việc phức tạp",
  "Tôi có khả năng giải quyết các vấn đề",
  "Tôi là người dễ xúc động",
  "Tôi có óc tưởng tượng phong phú",
  "Tôi thích sự tự do, không theo những quy định, quy tắc",
  "Tôi có khả năng thuyết trình, diễn xuất",
  "Tôi có thể chụp hình hoặc vẽ tranh, trang trí, điêu khắc",
  "Tôi có năng khiếu âm nhạc",
  "Tôi có khả năng viết, trình bày những ý tưởng của mình",
  "Tôi thích làm những công việc mới, những công việc đòi hỏi sự sáng tạo",
  "Tôi thoải mái bộc lộ những ý thích",
  "Tôi là người thân thiện, hay giúp đỡ người khác",
  "Tôi thích gặp gỡ, làm việc với con người",
  "Tôi là người lịch sự, tử tế",
  "Tôi thích khuyên bảo, huấn luyện hay giảng giái cho người khác",
  "Tôi là người biệt lắng nghe",
  "Tôi thích các hoạt động chăm sóc sức khỏe của bản thân và người khác",
  "Tôi thích các hoạt độngvì mục tiêu chung của công đồng, xã hội",
  "Tôi mong muốn mình có thể đóng góp để xã hội tốt đẹp hơn",
  "Tôi mong muốn mình có thể đóng góp để xã hội tốt đẹp hơn",
  "Tôi là người có tính phiêu lưu, mạo hiểm",
  "Tôi có tính quyết đoán",
  "Tôi là người năng động",
  "Tôi có khả năng diễn đạt, tranh luận, và thuyết phục người khác",
  "Tôi thích các việc quản lý, đánh giá",
  "Tôi thường đặt ra các mục tiêu, kế hoạch trong cuộc sống",
  "Tôi thích gây ảnh hưởng đến người khác",
  "Tôi là người thích cạnh tranh, và muốn mình giói hơn người khác",
  "Tôi muốn người khác phải kính trọng, nể phục tôi",
  "Tôi là người có đầu óc sắp xếp, tổ chức",
  "Tôi có tính cẩn thận",
  "Tôi là người chu đáo, chính xác và đáng tin cậy",
  "Tôi thích công việc tính toán sổ sách, ghi chép số liệu",
  "Tôi thích các công việc lưu trữ, phân loại, cập nhất thông tin",
  "Tôi thường đặt ra những mục tiêu, kế hoạch trong cuộc sống",
  "Tôi thích dự kiến các khoản thu chi",
  "Tôi thích lập thời khóa biểu, sắp xếp lịch làm việc",
  "Tôi thích làm việc với các con số, làm việc theo hướng dẫn, quy trình"
];
// let scores = {
//   realistic: 0,
//   investigate: 0,
//   artistic: 0,
//   social: 0,
//   enterprising: 0,
//   conventional: 0
// };
var scores = [0, 0, 0, 0, 0, 0];
/* 
index 0 => realistic
index 1 => investigate
index 2 => artistic
index 3 => social
index 4 => enterprising
index 5 => conventional
*/

const questionText = document.querySelector(".question");
const buttons = document.querySelectorAll(".answers button");
let questionsIndex = 0;
let scoresIndex = 0;




function printQuestion() {
  console.log(questions[questionsIndex]);
  questionText.textContent = questions[questionsIndex];
}

function nextQuestion() {  // câu hỏi tiếp theo
  questionsIndex += 1;
}



function removeQuestions() {
  questionText.style.display = "none";
  buttons.forEach(button => {
    button.style.display = "none";
  });
}

function resultScreen() {
  removeQuestions();

  const result = document.querySelector(".result");

  var resultArray = [
    {
      score: scores[0],
      name: "Người thực tế",
      skill1:
        "Người thuộc nhóm sở thích nghề nghiệp này thường có khả năng về kỹ thuật, công nghệ, hệ thống; ưa thích làm việc với đồ vật, máy móc, động thực vật; thích làm các công việc ngoài trời.",
      skill2:
        "Ngành nghề phù hợp với nhóm này bao gồm những nghề về kiến trúc, an toàn lao động, nghề mộc, xây dựng, thủy sản, kỹ thuật, máy tàu thủy, lái xe, huấn luyện viên, nông - lâm nghiệp (quản lý trang trại, nhân giống cá, lâm nghiệp...), cơ khí (chế tạo máy, bảo trì và sửa chữa thiết bị, luyện kim, cơ khí ứng dụng, tự động...), điện - điện tử, địa lý - địa chất (đo đạc, vẽ bản đồ địa chính), dầu khí, hải dương học, quản lý công nghiệp..."
    },
    {
      score: scores[1],
      name: "Người nghiên cứu",
      skill1:
        "Có khả năng về quan sát, khám phá, phân tích đánh giá và giải quyết các vấn đề.",
      skill2:
        "Ngành nghề phù hợp với nhóm này bao gồm: Các ngành thuộc lĩnh vực khoa học tự nhiên (toán, lý, hóa, sinh, địa lý, địa chất, thống kê...); khoa học xã hội (nhân học, tâm lý, địa lý...); y - dược (bác sĩ gây mê, hồi sức, bác sĩ phẫu thuật, nha sĩ...); khoa học công nghệ (công nghệ thông tin, môi trường, điện, vật lý kỹ thuật, xây dựng...); nông lâm (nông học, thú y...)."
    },
    {
      score: scores[2],
      name: "Nghệ sỹ",
      skill1:
        "Có khả năng về nghệ thuật, khả năng về trực giác, khả năng tưởng tượng cao, thích làm việc trong các môi trường mang tính ngẫu hứng, không khuôn mẫu.",
      skill2:
        "Ngành nghề phù hợp với nhóm này bao gồm: Các ngành về văn chương; báo chí (bình luận viên, dẫn chương trình...); điện ảnh, sân khấu, mỹ thuật, ca nhạc, múa, kiến trúc, thời trang, hội họa, giáo viên dạy sử/Anh văn, bảo tàng, bảo tồn..."
    },
    {
      score: scores[3],
      name: "Xã hội",
      skill1:
        "Có khả năng về ngôn ngữ, giảng giải, thích làm những việc như giảng giải, cung cấp thông tin, sự chăm sóc, giúp đỡ, hoặc huấn luyện cho người khác.",
      skill2:
        "Ngành nghề phù hợp với nhóm này bao gồm: sư phạm; giảng viên; huấn luyện viên điền kinh; tư vấn - hướng nghiệp; công tác xã hội, sức khỏe cộng đồng, thuyền trưởng, thư viện, bác sĩ chuyên khoa, thẩm định giá, nghiên cứu quy hoạch đô thị, kinh tế gia đình, tuyển dụng nhân sự, cảnh sát, xã hội học, bà đỡ, chuyên gia về X-quang, chuyên gia dinh dưỡng..."
    },
    {
      score: scores[4],
      name: "Thiên phú lãnh đạo",
      skill1:
        "Có khả năng về kinh doanh, mạnh bạo, dám nghĩ dám làm, có thể gây ảnh hưởng, thuyết phục người khác, có khả năng quản lý.",
      skill2:
        "Ngành nghề phù hợp với nhóm này bao gồm: Các ngành về quản trị kinh doanh (quản lý khách sạn, quản trị nhân sự...), thương mại, marketing, kế toán – tài chính, luật sư, dịch vụ khách hàng, tiếp viên hàng không, thông dịch viên, pha chế rượu, kỹ sư công nghiệp (ngành kỹ thuật hệ thống công nghiệp), bác sĩ cấp cứu, quy hoạch đô thị, bếp trưởng (nấu ăn), báo chí (phóng viên, biên tập viên...)..."
    },
    {
      score: scores[5],
      name: "Mẫu người công chức",
      skill1:
        "Có khả năng về số học, thích thực hiện những công việc chi tiết, thích làm việc với những số liệu, theo chỉ dẫn của người khác hoặc các công việc văn phòng.",
      skill2:
        "Ngành nghề phù hợp với nhóm này bao gồm: Các ngành nghề về hành chính, thống kê, thanh tra ngành, người giữ trẻ, điện thoại viên..."
    }
  ];

  resultArray.sort(function(a, b) {
    return b.score - a.score;
  });





  //   Print Result
  document.getElementById("taga").style.display = "none";
  document.getElementById("resultIntro").style.display = "block";
  let resultName = document.createElement("h2");
  result.classList.add("text-center");
  resultName.textContent = resultArray[0].name;
  let resultSkill1 = document.createElement("p");
  resultSkill1.textContent = resultArray[0].skill1;
  let resultSkill2 = document.createElement("p");
  resultSkill2.textContent = resultArray[0].skill2;

  result.append(resultName);
  result.append(resultSkill1);
  result.append(resultSkill2);

  result.style.display = "block";
}

function printCanvas() {
    var xValues = ['R:', 'I:', 'A:', 'S:', 'E:', 'C:'];
    var barColors = ["red", "green","blue","orange", "purple", "yellow"];

    document.querySelector(".container1").classList.remove("hide")

    new Chart("myChart", {
      
      type: "pie",
      indexLabelFontSize: 0,
      data: {
        labels: xValues,
        
        datasets: [{
          backgroundColor: barColors,
          
          data: scores
        }]
      },
      options: {
        title: {
          display: true,
          text: "Biểu điểm của bạn",
          fontSize:43
        }
      }
    });

}






function main() {
  printQuestion();
  buttons.forEach(button => {
    button.addEventListener("click", () => {
      let score = button.getAttribute("value");
      score = parseInt(score);
      scores[scoresIndex] += score;
      console.log(scores);
      nextQuestion();
      document.getElementById("1").checked = false;
      printQuestion();
      if (questionsIndex % 9 == 0) scoresIndex += 1;
      if (questionsIndex == questions.length) {
        resultScreen();
        printCanvas();


        //truyen du lieu sang xuly.php va day vao db
        $.ajax({
          url: "xuly.php",
          type: "POST",
          
          data:{clm: scores}
         
          
          
        });

      }
    });
  });
}



window.onload = main();