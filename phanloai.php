
<?php
include 'config.php';


$idkhach = $_GET['id'];
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Phân loại việc làm ở Việt Nam</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </head>
  <style>
    *{margin: 0; padding: 0;}

h1.tieude {
  font-family: 'Josefin Slab', serif;
  font-weight: 100;
  text-align: center;
  margin: 16px 0;
  font-size: 37px;
  margin-bottom: 100px;
}


.noidung {
  width: 80%;
  margin: auto;
  font-family: 'Josefin Slab', serif;
}

img.anhnho {
  float: left;
  height: 100px;
  margin-right: 10px;
}

.vaicaianh {
  overflow: hidden;
}

.motkhoi {
  border-bottom: 1px solid rgb(137 132 132);
  padding-bottom: 40px;
  margin-bottom: 40px;
}

.tdkhoi {
  height: 60px;
  font-size: 50px;
  color: #464646;
  font-weight: 300;
  cursor: pointer;
  display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid white;
    margin-bottom: 10px;
    overflow: hidden; 
  transition: 0.4s;
}

.tdkhoi:hover {
  background: lightblue;
}

.tdkhoi:hover .anhicon {
  margin-right: 10px;
}

.tdkhoi .anhicon {
  float: right;
  font-size: 26px;
  transition: 0.4s;
  margin-right: -100px;
}

.ndkhoi {
  color: gray;
  font-size: 20px;
  line-height: 24px;
}

.tdkhoi.xanhden {
  background: lightblue;
}

.tdkhoi.xanhden .anhicon {
  margin-right: 10;
  transform: rotate(180deg);
}
  </style>
  <body>


<?php include 'header.php';?>






<br><br><br><br>



      <div class="container">
          <div><center><h3><strong>Danh mục nghề nghiệp ở Việt Nam</strong></h3></center></div>
          <br>
    <div class="content-detail" id="content">

<div class="desc">
    Vừa qua, Thủ tướng Chính phủ đã ban hành Danh mục nghề nghiệp Việt Nam (kèm theo Quyết định số 34/2020/QĐ-TTg). Quyết định này có hiệu lực thi hành kể từ ngày 15/1/2021.
    <br />
</div>

<div class="ExternalClass0C6411499C1C4042B0F355ACE456E1D1"><p><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Danh mục nghề nghiệp được phân loại dựa trên các khái niệm sau&#58;</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;"><em>Công việc cụ&#160;thể </em>(job)&#58;&#160;là công việc được thể hiện bằng tập hợp các nhiệm vụ và trách nhiệm gắn liền với phương tiện do con người (người chủ hoặc người tự làm) thực hiện.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;"><em>Nghề nghiệp</em>&#160;(Occupation)&#58;&#160;là tập hợp các công việc cụ&#160;thể (job)&#160;giống nhau về các nhiệm vụ hoặc mức độ tương đồng cao về nhiệm vụ chính.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;"><em>Danh mục nghề nghiệp</em>&#58; là việc sắp xếp mã hóa các nghề nghiệp vào các nhóm có cùng kỹ năng được thông qua học tập hoặc kinh nghiệm.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;"><em>Kỹ năng</em>&#58; là khả năng thực hiên các nhiệm vụ của một việc làm nhất định. Kỹ năng được chia thành&#58; <em>cấp độ kỹ năng và kỹ năng chuyên môn</em>.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;"><em>Thứ nhất</em>, <em>cấp độ kỹ năng</em> thể hiện độ khó, độ phức tạp trong việc thực hiện nhiệm vụ. Cấp độ kỹ năng được chia thành 5 cấp&#58;</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">- Cấp độ kỹ năng 1&#58; Nhiệm vụ đơn giản, chỉ đòi hỏi sức khỏe, biết tính toán;</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">- Cấp độ kỹ năng 2&#58; Nhiệm vụ đòi hỏi biết về chuyên môn của công việc, có trình độ chuyên môn nhất định tương đương sơ cấp;</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">- Cấp độ kỹ năng 3&#58; Nhiệm vụ phức tạp hơn, đòi hỏi chuyên môn cao hơn cấp độ kỹ năng 2, tương ứng với trình độ trung cấp hoặc cao đẳng;</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">- Cấp độ kỹ năng 4&#58; Nhiệm vụ phức tạp, đòi hỏi có chuyên môn sâu, tương ứng với trình độ đại học;</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">- Cấp độ kỹ năng 5&#58; Nhiệm vụ phức tạp nhất, đòi hỏi có chuyên môn sâu, rộng, tương ứng với trình độ sau đại học.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;"><em>Thứ hai, kỹ năng chuyên môn</em> bao gồm&#58; lĩnh vực chuyên môn (tương ứng các nhóm ngành nghề đào tạo) mà công việc đòi hỏi, các công cụ máy móc đã sử dụng, các nguyên liệu vật liệu dùng trong sản xuất và loại sản phẩm và dịch vụ đã làm ra. </span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Danh mục nghề nghiệp Việt Nam được chia thành 5 cấp&#58;</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;"><em>Cấp 1&#58;</em> Cấp độ kỹ năng.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;"><em>Cấp 2 đến cấp 5</em>&#58; Lĩnh vực chuyên môn.</span></span></p>

<div class="noidung">
  <h1 class="tieude">Phân loại ngành nghề</h1>

    <div class="motkhoi">
      <h2 class="tdkhoi">Cấp độ 1 <i class="anhicon fas fa-angle-down"></i></h2>
      <div class="ndkhoi">
        Nhiệm vụ đơn giản, chỉ đòi hỏi sức khỏe, biết tính toán;

        <p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Nhóm này bao gồm những nghề đòi hỏi kiến thức và kinh nghiệm ở trình độ bậc trung (cao đẳng, trung cấp) về các lĩnh vực khoa học và kỹ thuật, sức khỏe, kinh doanh và quản lý, luật pháp, văn hóa, xã hội, thông tin và truyền thông và giáo viên.</span></span></p>
      </div> <!-- end nd khoi -->
    </div>  <!-- end moi khoi -->

    <div class="motkhoi">
      <h2 class="tdkhoi">Cấp độ 2 <i class="anhicon fas fa-angle-down"></i></h2>
      <div class="ndkhoi">
        Nhiệm vụ đòi hỏi biết về chuyên môn của công việc, có trình độ chuyên môn nhất định tương đương sơ cấp;

         <p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Nhóm này bao gồm những nghề đòi hỏi kiến thức và kinh nghiệm cần thiết để tổ chức, lưu trữ, tính toán và truy cập thông tin. Các nhiệm vụ chính của nhóm này bao gồm việc thực thi các công việc thư ký, xử lý văn bản, vận hành các máy móc, thiết bị văn phòng, ghi chép và tính toán số liệu bằng số và thực hiện các nhiệm vụ văn phòng theo định hướng của khách hàng (như làm các công việc có liên quan đến các dịch vụ thư tín, chuyển tiền, bố trí du lịch, thông tin thương mại và giao dịch khác).</span></span></p>

        <p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Hầu hết các nghề thuộc nhóm này đòi hỏi cấp độ kỹ năng hai.</span></span></p>

        
      </div> <!-- end nd khoi -->
    </div>  <!-- end moi khoi -->

    <div class="motkhoi">
      <h2 class="tdkhoi">Cấp độ 3 <i class="anhicon fas fa-angle-down"></i></h2>
      <div class="ndkhoi">
        Nhiệm vụ phức tạp hơn, đòi hỏi chuyên môn cao hơn cấp độ kỹ năng 2, tương ứng với trình độ trung cấp hoặc cao đẳng;

        <p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Nhóm này bao gồm những nghề đòi hỏi kiến thức và kinh nghiệm ở trình độ bậc trung (cao đẳng, trung cấp) về các lĩnh vực khoa học và kỹ thuật, sức khỏe, kinh doanh và quản lý, luật pháp, văn hóa, xã hội, thông tin và truyền thông và giáo viên.</span></span></p>

        <p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Hầu hết các nghề thuộc nhóm này đòi hỏi cấp độ kỹ năng ba.</span></span></p>
      </div> <!-- end nd khoi -->
    </div>  <!-- end moi khoi -->

    <div class="motkhoi">
      <h2 class="tdkhoi">Cấp độ 4 <i class="anhicon fas fa-angle-down"></i></h2>
      <div class="ndkhoi">
        Nhiệm vụ phức tạp, đòi hỏi có chuyên môn sâu, tương ứng với trình độ đại học;

       <p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Nhóm này bao gồm những nghề đòi hỏi phải có kiến thức chuyên môn, nghiệp vụ và kinh nghiệm ở trình độ cao (đại học trở lên) trong lĩnh vực khoa học và kỹ thuật, sức khỏe, giáo dục, kinh doanh và quản lý, công nghệ thông tin và truyền thông và luật pháp, văn hóa, xã hội.</span></span></p>

        <p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Hầu hết các nghề thuộc nhóm này đòi hỏi cấp độ kỹ năng bốn và năm.</span></span></p>
      </div> <!-- end nd khoi -->
    </div>  <!-- end moi khoi -->

    <div class="motkhoi">
      <h2 class="tdkhoi">Cấp độ 5 <i class="anhicon fas fa-angle-down"></i></h2>
      <div class="ndkhoi">
        Nhiệm vụ phức tạp nhất, đòi hỏi có chuyên môn sâu, rộng, tương ứng với trình độ sau đại học.

        <p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Nhóm này bao gồm những nghề đòi hỏi kiến thức và kinh nghiệm cần thiết trong việc cung cấp các dịch vụ cá nhân, bảo vệ và bán các sản phẩm tại các cửa hàng, cửa hiệu hoặc tại chợ. Các nhiệm vụ chính của nhóm này bao gồm việc cung cấp các dịch vụ có liên quan đến việc du lịch, trông coi nhà cửa, cung cấp lương thực, thực phẩm, phục vụ vui chơi giải trí, quản lý khách sạn, chăm sóc cá nhân, bảo vệ tính mạng và tài sản, duy trì luật pháp và luật lệ hoặc bán sản phẩm tại các cửa hàng, cửa hiệu và tại chợ.</span></span></p>

        <p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Hầu hết các nghề thuộc nhóm này đòi hỏi cấp độ kỹ năng hai.</span></span></p>
      </div> <!-- end nd khoi -->
    </div>  <!-- end moi khoi -->


</div>

<!-- <p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;"><strong>Tóm tắt 10 nhóm nghề cấp 1</strong></span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;"><a name="bookmark48"></a><a name="bookmark44"></a><a name="bookmark47"><strong>(</strong></a><strong>1) Lãnh đạo, quản lý trong các ngành, các cấp và các đơn vị</strong></span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Nhóm này bao gồm những nhà lãnh đạo, quản lý làm việc trong các ngành, các cấp và trong các đơn vị có giữ các chức vụ, có quyền quản lý, chỉ huy, điều hành từ trung ương tới cấp xã.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;"><a name="bookmark51"></a><a name="bookmark49"></a><a name="bookmark50"><strong>(</strong></a><strong>2) Nhà chuyên môn bậc cao</strong></span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Nhóm này bao gồm những nghề đòi hỏi phải có kiến thức chuyên môn, nghiệp vụ và kinh nghiệm ở trình độ cao (đại học trở lên) trong lĩnh vực khoa học và kỹ thuật, sức khỏe, giáo dục, kinh doanh và quản lý, công nghệ thông tin và truyền thông và luật pháp, văn hóa, xã hội.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Hầu hết các nghề thuộc nhóm này đòi hỏi cấp độ kỹ năng bốn và năm.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;"><a name="bookmark54"></a><a name="bookmark52"></a><a name="bookmark53"><strong>(</strong></a><strong>3) Nhà chuyên môn bậc trung</strong></span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Nhóm này bao gồm những nghề đòi hỏi kiến thức và kinh nghiệm ở trình độ bậc trung (cao đẳng, trung cấp) về các lĩnh vực khoa học và kỹ thuật, sức khỏe, kinh doanh và quản lý, luật pháp, văn hóa, xã hội, thông tin và truyền thông và giáo viên.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Hầu hết các nghề thuộc nhóm này đòi hỏi cấp độ kỹ năng ba.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;"><a name="bookmark55"><strong>(</strong></a><strong>4) Nhân viên trợ lý văn phòng</strong></span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Nhóm này bao gồm những nghề đòi hỏi kiến thức và kinh nghiệm cần thiết để tổ chức, lưu trữ, tính toán và truy cập thông tin. Các nhiệm vụ chính của nhóm này bao gồm việc thực thi các công việc thư ký, xử lý văn bản, vận hành các máy móc, thiết bị văn phòng, ghi chép và tính toán số liệu bằng số và thực hiện các nhiệm vụ văn phòng theo định hướng của khách hàng (như làm các công việc có liên quan đến các dịch vụ thư tín, chuyển tiền, bố trí du lịch, thông tin thương mại và giao dịch khác).</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Hầu hết các nghề thuộc nhóm này đòi hỏi cấp độ kỹ năng hai.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;"><a name="bookmark56"><strong>(</strong></a><strong>5) Nhân viên dịch vụ và bán hàng</strong></span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Nhóm này bao gồm những nghề đòi hỏi kiến thức và kinh nghiệm cần thiết trong việc cung cấp các dịch vụ cá nhân, bảo vệ và bán các sản phẩm tại các cửa hàng, cửa hiệu hoặc tại chợ. Các nhiệm vụ chính của nhóm này bao gồm việc cung cấp các dịch vụ có liên quan đến việc du lịch, trông coi nhà cửa, cung cấp lương thực, thực phẩm, phục vụ vui chơi giải trí, quản lý khách sạn, chăm sóc cá nhân, bảo vệ tính mạng và tài sản, duy trì luật pháp và luật lệ hoặc bán sản phẩm tại các cửa hàng, cửa hiệu và tại chợ.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Hầu hết các nghề thuộc nhóm này đòi hỏi cấp độ kỹ năng hai.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;"><a name="bookmark57"><strong>(</strong></a><strong>6) Lao động có kỹ năng trong nông nghiệp, lâm nghiệp, thủy sản</strong></span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Nhóm này bao gồm những nghề đòi hỏi kiến thức và kinh nghiệm cần thiết trong việc sản xuất ra các sản phẩm nông, lâm, ngư nghiệp. Các nhiệm vụ chính bao gồm trồng trọt, nuôi hoặc săn bắt động vật, nuôi hoặc đánh bắt thủy sản, bảo vệ và khai thác rừng, bán các sản phẩm cho khách hàng và tổ chức tiếp thị. Để phân biệt lao động trong nông nghiệp, lâm nghiệp, thủy sản thuộc nhóm này với lao động giản đơn (nhóm 9) ta thường căn cứ vào 2 tiêu chí&#58; (1) biết lập kế hoạch và (2) biết sử dụng máy móc cho công việc.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Hầu hết các nghề thuộc nhóm này đòi hỏi cấp độ kỹ năng hai.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;"><a name="bookmark58"><strong>(</strong></a><strong>7) Thợ thủ công và các nghề nghiệp có liên quan khác</strong></span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Nhóm này bao gồm những nghề đòi hỏi kiến thức và kinh nghiệm cần thiết của những người công nhân kỹ thuật hoặc thợ thủ công lành nghề, trong đó họ phải có hiểu biết về tất cả các công đoạn của dây chuyền sản xuất, kể cả phải hiểu biết các đặc điểm và công dụng của sản phẩm cuối cùng làm ra. Các nhiệm vụ chính bao gồm việc chiết hoặc xử lý các nguyên liệu thô; chế tạo và sửa chữa hàng hóa; máy móc; xây dựng, bảo trì và sửa chữa đường xá, nhà cửa, các công trình xây dựng khác; tạo ra các sản phẩm và các mặt hàng thủ công khác nhau.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Hầu hết các nghề thuộc nhóm này đòi hỏi cấp độ kỹ năng hai.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;"><a name="bookmark59"><strong>(</strong></a><strong>8) Thợ vận hành và lắp ráp máy móc, thiết bị</strong></span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Nhóm này bao gồm những nghề đòi hỏi kiến thức và kinh nghiệm cần thiết trong việc vận hành và giám sát các máy móc thiết bị công nghiệp với sự hiểu biết đầy đủ về các máy móc, thiết bị sử dụng trong công việc. Các nhiệm vụ chính bao gồm việc vận hành và giám sát các máy móc thiết bị trong khai thác mỏ, trong công nghiệp và xây dựng và trong xử lý sản phẩm và sản xuất; lái các phương tiện giao thông; lái và vận hành các máy móc, thiết bị di động và lắp ráp các chi tiết thành phần thành sản phẩm hoàn chỉnh.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Hầu hết các nghề thuộc nhóm này đòi hỏi cấp độ kỹ năng hai.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;"><a name="bookmark62"></a><a name="bookmark60"></a><a name="bookmark61"><strong>(</strong></a><strong>9) Lao động giản đơn</strong></span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Nhóm này bao gồm những nghề đòi hỏi kiến thức và kinh nghiệm cần thiết trong việc thực hiện các công việc đơn giản và đơn điệu, bao gồm việc sử dụng các công cụ cầm tay, trong nhiều trường hợp thì sử dụng khá nhiều sức cơ bắp và trong một số trường hợp ngoại lệ thì có sử dụng đến khả năng phán đoán và sáng tạo cá nhân một cách hạn chế. Các nhiệm vụ chủ yếu bao gồm việc bán hàng hóa trên đường phố, gác cổng, gác cửa và trông coi tài sản, lau, chùi, quét dọn, giặt, là và làm các công việc phổ thông trong các lĩnh vực khai thác mỏ, nông, lâm, ngư nghiệp, xây dựng, công nghiệp.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Hầu hết các nghề thuộc nhóm này đòi hỏi cấp độ kỹ năng thứ nhất.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;"><a name="bookmark64"></a><a name="bookmark63"><strong>(10) Lực lượng vũ trang</strong></a></span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Nhóm này bao gồm tất cả những người thực hiện đang phục vụ trong quân đội, công an kể cả lực lượng hậu cần, không phân biệt phục vụ tự nguyện hay bắt buộc và do Bộ Quốc phòng và Bộ Công an quản lý.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Không được kể là lực lượng vũ trang đối với những người là lao động dân sự nhưng đang làm những công việc có liên quan đến an ninh, quốc phòng, hải quan, kiểm lâm, kiểm ngư, những người không phải là quân đội, công an nhưng được trang bị vũ trang cùng tất cả những người tuy trước đây là quân nhân, công an nhưng nay đã chuyển ngành, phục viên, xuất ngũ.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Nhóm này đòi hỏi ở tất cả các cấp độ kỹ năng.</span></span></p>

<p style="text-align&#58;justify;"><span style="font-size&#58;14pt;"><span style="font-family&#58;&quot;Times New Roman&quot;,serif;">Chi tiết danh mục nghề nghiệp Việt Nam và giải thích các nghề thuộc danh mục nghề nghiệp Việt Nam được quy định chi tiết tại Phụ lục I và Phần II Phụ lục II ban hành kèm theo Quyết định số 34/2020/QĐ-TTg.</span></span></p></div> -->
</div>


      </div>
    <script>
      $(document).ready(function() {
      $('.tdkhoi').click(function(event) {
        /* Act on the event */
        $('.ndkhoi').slideUp();
        $('.tdkhoi').removeClass('xanhden');

        $(this).toggleClass('xanhden');

        $(this).next().slideToggle(600)
      });

      // code cho phan phong to anh
      // $('.vaicaianh a').fancybox();

      $('.ndkhoi').slideUp();
    });
    </script>
  </body>
</html>