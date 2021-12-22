<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style1.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://kit.fontawesome.com/4eb98e0bb5.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300&display=swap" rel="stylesheet">
  <title>Trang cá nhân</title>
</head>
<body>

  <div class="container bia" >
    <div class="img_bia">
      <img class="img_img" src="https://scontent.fhph1-2.fna.fbcdn.net/v/t39.30808-6/s960x960/191047615_530943181289382_3652252575935247869_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=e3f864&_nc_ohc=MZxBPI0ZrXMAX8Wx2-b&_nc_ht=scontent.fhph1-2.fna&oh=00_AT8DPydsgb3ArtQbj23KtdT1mkB8Fhwrg-QCun-w-T1fzQ&oe=61C72979" alt="">
    </div>
    <div class="row infor">
      <div class="col-3  avata">
        <img class="img_avata" src="https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-anh-girl-xinh-toc-ngan-de-thuong.jpg" alt="">
      </div>
      <div class="col-6  name">
        <span class="name_name" >
          Phạm Huyền Trân
        </span>
      </div>
      <div class="col-3  chinhsua">
        <button type="" class="btn btn-primary btn_chinhsua" data-toggle="modal" data-target="#ChinhSua">Chỉnh sửa trang cá nhân</button>
        <a href="#" class=""><button type="button" class="btn btn-danger btn_dangxuat">Đăng Xuất</button></a>
      </div>
    </div>
    
  </div>
  
  


  <div class="qwe"><a href="{{URL::to('/chat/'.$data_user->idUser)}}"><i class="fas fa-comments-dollar mmm"></i></i></a></div>
    <div class="container abc" >
    <div class="row contents">
      <div class="col-md-4 col-sm-12">
          <div class="thongtin" >
            <h2 class="gioithieu">Giới thiệu</h2>
            <p class="tieusu"style="color:{{($data_theme->ChuTS)}} ;">Tiểu sử</p>
            <div class="diachi">
              <div class="">Địa chỉ:</div>
              <div class="infor_1">Hà Nội</div>
            </div>
            <div class="diachi">
              <div class="">Email:</div>
              <div class="infor_1">email@gmail.com</div>
            </div>
            <div class="diachi">
              <div class="">Ngày sinh:</div>
              <div class="infor_1">01/01/2000</div>
            </div>
            <div class="diachi">
              <div class="">Giới Tính:</div>
              <div class="infor_1">Nữ</div>
            </div>
          </div>
        <div class="thongtin" >
          <h2 class="gioithieu">Bạn bè hệ thống</h2>
          <table class="table">
            <tbody>
                <tr>
                  <td class="a2a"><div class="avata_icon a1a"> <img src="https://anhdepblog.com/wp-content/uploads/2020/09/hinh-girl-xinh-de-thuong-10.jpg" alt=""></div></td>
                  <td class="a2a" style="background-color:{{($data_theme->MauNoiDung)}};color:{{($data_theme->MauChu)}} ;"> Tiên Tiên</td>
                  <td class=""><a href="{{URL::to('/xemthanhvien/'.$all->idUser)}}"><button class="us"><i class="far fa-eye"></i></button></a></td>
                  <td class=""><button class="us"><i class="far fa-comments"></i></button></td>
                </tr>
              </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-8 col-sm-12  ">
        <div class="dangblog"style="background-color: {{($data_theme->MauNoiDung)}};">
          <div class="avata_icon">
              
            <img src="https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-anh-girl-xinh-toc-ngan-de-thuong.jpg" alt="">
          </div>
          <button type="button" class="content_blog" data-toggle="modal" data-target="#myModal">Viết blog</button>
        </div>
        <div class="baiviet" >
          <h2>Bài viết</h2>
        </div>
          <div div class="baiviet_infor" >
            <div class="baiviet_infor-header">
              <div class="avata_icon">
                <img src="https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-anh-girl-xinh-toc-ngan-de-thuong.jpg" alt="">
                <div class="name_icon">
                Phạm Huyền Trân
                </div>
                
              </div>
              <div class="tuychon">
                      
                     <button class="us"><i class="far fa-edit" data-toggle="modal" data-target="#suabaiviet"></i></button>
                      <a href="{{URL::to('/delete-blog/'.$data_blog->idBlog)}}"  onclick="return confirm('Bạn có chắc chắn muốn xoá bài viết này không?')"><button class="us"><i class="far fa-trash-alt"></i></button></a>
              </div>
            </div>
            <div class="contents_blog">
              <p> Nội dung </p>
              <div class="contents_img">
                  <img class="oqw" src="{{asset('public/frontend/img/'.$data_blog->HinhAnh)}}" alt="">
              </div>
            </div>
          </div>
        </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



  
  <!-- tạo blog   -->
  <div class="modal modal1" id="myModal">
    <div class="modal-dialog">
      <div  class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title " style="margin: auto;font-size: 20px;">Tạo bài viết</h4>
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="font-size: 14px;">Huỷ</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div class="baiviet_infor-header">
            <div class="avata_icon">
              <img src="{{asset('public/frontend/img/'.$data_user->AnhDT)}}" alt="">
              <div class="name_icon"> {{($data_user->HoTen)}}</div>
            </div>
          </div>
          <form action="{{URL::to('/them-baiviet')}}" method= "post" enctype='multipart/form-data'>
            <textarea  style="background-color:{{($data_theme->MauNoiDung)}};color:{{($data_theme->MauChu)}} ; opacity: 0.7;  " class="contents_modal" name="noidung" id="" cols="30" rows="10" placeholder="Bạn đang nghĩ gì ?"></textarea>
            <span style="display: block;">Thêm vào bài viết: Ảnh/Video</span>
            <input type="file" id="img" name="hinhanh" accept="image/*" >
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary dangbai">Đăng bài</button>  
        </div> 
            </form>
      </div>
    </div>
  </div>


  <!-- SUABLOG -->

  <div class="modal modal" id="suabaiviet">
    <div class="modal-dialog " >
      <div style="background-color:{{($data_theme->MauNoiDung)}};color:{{($data_theme->MauChu)}} ;  "  class="modal-content ">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title " style="margin: auto;font-size: 20px;">Tạo bài viết</h4>
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="font-size: 14px;">Huỷ</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div class="baiviet_infor-header">
            <div class="avata_icon">
              <img src="{{asset('public/frontend/img/'.$data_user->AnhDT)}}" alt="">
              <div class="name_icon"> {{($data_user->HoTen)}}</div>
            </div>
          </div>
          <form action="{{URL::to('/sua-baiviet/'.$data_blog->idBlog)}}" method= "post" enctype='multipart/form-data'>
           @csrf
            <textarea style="background-color:{{($data_theme->MauNoiDung)}};color:{{($data_theme->MauChu)}} ;  " class="contents_modal aaaa" name="noidung" id="" cols="30" rows="10" placeholder="Bạn đang nghĩ gì ?">{{($data_blog->NoiDung)}}</textarea>
              @if($data_blog->HinhAnh)
                <img class="ddd" src="{{asset('public/frontend/img/'.$data_blog->HinhAnh)}}" alt="">
              @endif
              <span style="display: block;">Thay đổi ảnh: Ảnh/Video</span>
              <input type="file" id="img" name="hinhanh" accept="image/*" multiple>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary dangbai">Lưu</button>  
        </div> 
          </form>
      </div>
    </div>
  </div>


  <div class="modal  " id="ChinhSua">
    <div class="modal-dialog xyz">
      <div class="modal-content plm" style="background-color:{{($data_theme->MauNoiDung)}};color:{{($data_theme->MauChu)}} ;  ">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title " style="margin: auto;font-size: 20px;">Chỉnh sửa trang cá nhân</h4>
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="font-size: 14px;">Huỷ</button>
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div class="group1">
            <div class="group1_header">
              <span class="qaz">Thay đổi Theme</span>
            </div>
            <div class="group1_contents">
              <div class="bnm">
                    @foreach($show_data as $key =>$data_user)
                <form action="{{URL::to('/thaydoi-theme/'.$idUser)}}" method="post">
                @method('put') 
                @method('get') 
                @csrf
                  <select name="suatheme" style="background-color:{{($data_theme->MauNoiDung)}};color:{{($data_theme->MauChu)}} ; opacity: 0.7; margin-bottom: 10px; " class="form-select" value="{{($data_user->idTheme)}}" aria-label="Default select example">
                    <option selected disabled>{{($data_user->idTheme)}}</option>
                    @endforeach
                    @foreach($all_theme as $key =>$themes)
                    <option value="{{($themes->idTheme)}}">{{($themes->idTheme)}}</option>
                    @endforeach
                  </select>
                  <button type="submit" style="font-size: 14px; min-width: 100px;" class="btn btn-primary">Thay đổi và đăng xuất</button>
                </form>
              </div>
            </div>
          </div>
          <div class="group1">
            <div class="group1_header">
              <span class="qaz">Ảnh đại diện</span>
            </div>
            <div class="group1_contents">
              <img class="img_avata1" src="{{asset('public/frontend/img/'.$data_user->AnhDT)}}" alt="">
              <div class="bnm1">
                <form action="{{URL::to('/sua-anhdt/'.$idUser)}}" method="post" enctype='multipart/form-data'>

                  <label for="formFile" class="form-label">Chọn ảnh từ thiết bị</label>
                  <input type="file" class="form-control" id="img" name="hinhanh" accept="image/*" >
                  <button type="submit" style="font-size: 14px; min-width: 100px;" class="btn btn-primary">Thay đổi</button>
                </form>
              </div>
            </div>
          </div>
          <div class="group1">
            <div class="group1_header">
              <span class="qaz">Ảnh bìa</span>
            </div>
            <div class="group1_contents">
              <img class="chinhsua_img_img" src="{{asset('public/frontend/img/'.$data_user->AnhBia)}}" alt="">
              <div class="bnm1">
                <form action="{{URL::to('/sua-anhbia/'.$idUser)}}" method="post" enctype='multipart/form-data'>

                  <label for="formFile" class="form-label">Chọn ảnh từ thiết bị</label>
                  <input type="file" class="form-control" id="img" name="hinhanh" accept="image/*" >
                  <button type="submit" style="font-size: 14px; min-width: 100px;" class="btn btn-primary">Thay đổi</button>
               </form>
              </div>
            </div>
          </div>
          <div class="group1">
            <div class="group1_header">
              <span class="qaz">Tiểu sử</span>
            </div>
            <form class="group1_contents" action="{{URL::to('/update_tieusu-user/'.$idUser)}}" method="post" >

              <textarea style="background-color:{{($data_theme->MauNoiDung)}};color:{{($data_theme->MauChu)}} ; opacity: 0.7;  " name="TieuSu" id="" cols="30" class="chinhsua_tieusu" rows="10">{{($data_user->TieuSu)}}</textarea>

              <div class="bnm">
                <a href=""><button type="button" style="font-size: 14px; min-width: 100px;" class="btn btn-secondary">Huỷ</button></a>
                <button type="submit" style="font-size: 14px; min-width: 100px; margin-left: 10px;" class="btn btn-primary">Lưu</button>
              </div>
            </form>
          </div>
          <div class="group1">
            <div class="group1_header">
              <span class="qaz">Giới thiệu</span>
            </div>
            <form class="group1_contents" action="{{URL::to('/update-user/'.$idUser)}}" method="post" >

              <div class="thongtin hjk" >

                <div class="diachi1">
                  <div  class="">Họ và tên:</div>
                  <input style="background-color:{{($data_theme->MauNoiDung)}};color:{{($data_theme->MauChu)}} ; opacity: 0.7;  " name="HoTen" type="text" class="chinhsua_gioithieu" value="{{($data_user->HoTen)}}"  >
                </div>
                <div class="diachi1">
                  <div class="">Địa chỉ:</div>
                  <input style="background-color:{{($data_theme->MauNoiDung)}};color:{{($data_theme->MauChu)}} ; opacity: 0.7;  " name="DiaChi" type="text" class="chinhsua_gioithieu" value="{{($data_user->DiaChi)}}"  >
                </div>
                <div class="diachi1">
                  <div class="">Email:</div>
                  <input style="background-color:{{($data_theme->MauNoiDung)}};color:{{($data_theme->MauChu)}} ; opacity: 0.7;  " name="Email" type="text" class="chinhsua_gioithieu" value="{{($data_user->Email)}}"  >
                </div>
                <div class="diachi1">
                  <div class="">Ngày sinh:</div>
                  <input style="background-color:{{($data_theme->MauNoiDung)}};color:{{($data_theme->MauChu)}} ; opacity: 0.7;  " name="NgaySinh" type="text" class="chinhsua_gioithieu" value="{{($data_user->NgaySinh)}}"  >
                </div>
                <div class="diachi1">
                  <div class="">Giới tính:</div>
                  <select style="background-color:{{($data_theme->MauNoiDung)}};color:{{($data_theme->MauChu)}} ; opacity: 0.7;  " class="form-select chinhsua_gioithieu" name="GioiTinh" aria-label="Default select example">
                    <option selected>{{($data_user->GioiTinh)}}</option>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                  </select>
                </div>
                
              </div>
              <div class="bnm">
                <a href=""><button type="button" style="font-size: 14px; min-width: 100px;" class="btn btn-secondary">Huỷ</button></a>
                <button type="submit" style="font-size: 14px; min-width: 100px; margin-left: 10px;" class="btn btn-primary">Lưu</button>
              </div>
            </form>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer"></div>
      </div>
    </div>
  </div>
  
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>