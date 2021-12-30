$(document).ready(function() {
	

var data_nganhC = [
	{
		"ten_nganhC": "Chính trị học",
		"maC": "7310201",
	},
	{
		"ten_nganhC": "Xây dựng Đảng và Chính quyền Nhà nước",
		"maC": "7310202",
	},
	{
		"ten_nganhC": "Chính trị Công an nhân dân",
		"maC": "7310203",
	},
	{
		"ten_nganhC": "Quản lý nhà nước",
		"maC": "7310205",
	},
	{
		"ten_nganhC": "Quan hệ quốc tế",
		"maC": "7310206",
	},
	{
		"ten_nganhC": "Công tác xã hội",
		"maC": "7760101",
	},
	{
		"ten_nganhC": "Công tác thanh thiếu niên",
		"maC": "7760102",
	},
	{
		"ten_nganhC": "Xã hội học",
		"maC": "7310301",
	},
	{
		"ten_nganhC": "Nhân học",
		"maC": "7310302",
	},
	{
		"ten_nganhC": "Giới và Phát triển",
		"maC": "7310399",
	},
	{
		"ten_nganhC": "Tâm lý học",
		"maC": "7310401",
	},
	{
		"ten_nganhC": "Tâm lý học giáo dục",
		"maC": "7310403",
	},
	{
		"ten_nganhC": "Địa lý học",
		"maC": "7310501",
	},
	{
		"ten_nganhC": "Quốc tế học",
		"maC": "7310601",
	},
	{
		"ten_nganhC": "Châu Á học",
		"maC": "7310602",
	},
	{
		"ten_nganhC": "Đông phương học",
		"maC": "7310608",
	},
	{
		"ten_nganhC": "Trung Quốc học",
		"maC": "7310612",
	},
	{
		"ten_nganhC": "Nhật Bản học",
		"maC": "7310613",
	},
	{
		"ten_nganhC": "Hàn Quốc học",
		"maC": "7310614",
	},
	{
		"ten_nganhC": "Việt Nam học",
 		"maC": "7310630	",
 	},


]

var data_nganhT = [

	{
		"ten_nganhT": "Toán học",
		"ma_nganhT" : "7460101",
	},
	{
		"ten_nganhT": "Toán ứng dụng",
		"ma_nganhT" : "7460112",
	},{
		"ten_nganhT": "Toán – Tin",
		"ma_nganhT" : "7460117",
	},{
		"ten_nganhT": "Thống kê",
		"ma_nganhT" : "7460201",
	},
]

var data_KT = [

	{"ten_nganhKT": "Công nghệ kỹ thuật kiến trúc",
	"ma_nganh": "7510101",
	},
	{"ten_nganhKT": "Công nghệ kỹ thuật công trình xây dựng",
	"ma_nganh": "7510102",
	},
	{"ten_nganhKT": "Công nghệ kỹ thuật xây dựng",
	"ma_nganh": "7510103",
	},
	{"ten_nganhKT": "Công nghệ kỹ thuật giao thông",
	"ma_nganh": "7510104",
	},
	{"ten_nganhKT": "Công nghệ kỹ thuật vật liệu xây dựng",
	"ma_nganh": "7510105",
	},
	{"ten_nganhKT": "Hệ thống kỹ thuật công trình xây dựng",
	"ma_nganh": "7510106",
	},
	{"ten_nganhKT": "Kỹ thuật hệ thống công nghiệp",
	"ma_nganh": "7510118",
	},
	{"ten_nganhKT": "Kiến trúc",
	"ma_nganh": "7580101",
	},
	{"ten_nganhKT": "Kiến trúc cảnh quan",
	"ma_nganh": "7580102",
	},
	{"ten_nganhKT": "Kiến trúc nội thất",
	"ma_nganh": "7580103",
	},
	{"ten_nganhKT": "Kiến trúc đô thị",
	"ma_nganh": "7580104",
	},
	{"ten_nganhKT": "Quy hoạch vùng và đô thị",
	"ma_nganh": "7580105",
	},
	{"ten_nganhKT": "Quản lý đô thị và công trình",
	"ma_nganh": "7580106",
	},
	{"ten_nganhKT": "Thiết kế nội thất",
	"ma_nganh": "7580108",
	},
	{"ten_nganhKT": "Đô thị học",
	"ma_nganh": "7580112",
	},
	{"ten_nganhKT": "Kỹ thuật xây dựng",
	"ma_nganh": "7580201",
	},
	{"ten_nganhKT": "Kỹ thuật xây dựng công trình thủy",
	"ma_nganh": "7580202",
	},
	{"ten_nganhKT": "Kỹ thuật xây dựng công trình biển",
	"ma_nganh": "7580203",
	},
	{"ten_nganhKT": "Kỹ thuật công trình ngầm thành phố và hệ thống tàu điện ngầm",
	"ma_nganh": "7580204",
	},
	{"ten_nganhKT": "Kỹ thuật xây dựng công trình giao thông",
	"ma_nganh": "7580205",
	},
	{"ten_nganhKT": "Kỹ thuật cơ sở hạ tầng",
	"ma_nganh": "7580210",
	},
	{"ten_nganhKT": "Địa kỹ thuật xây dựng",
	"ma_nganh": "7580211",
	},
	{"ten_nganhKT": "Kỹ thuật tài nguyên nước",
	"ma_nganh": "7580212",
	},
	{"ten_nganhKT": "Kỹ thuật cấp thoát nước",
	"ma_nganh": "7580213",
	},
	{"ten_nganhKT": "Kinh tế xây dựng",
	"ma_nganh": "7580301",
	},
	{"ten_nganhKT": "Quản lý xây dựng",
	"ma_nganh": "7580302",
	},
]

var data_KS = [
	{"ten_nganh": "Kỹ thuật địa chất",	
	"ma_nganh": "7520501",
	},
	{"ten_nganh": "Kỹ thuật địa vật lý",	
	"ma_nganh": "7520502",
	},
	{"ten_nganh": "Kỹ thuật trắc địa bản đồ",	
	"ma_nganh": "7520503",
	},
	{"ten_nganh": "Kỹ thuật mỏ",	
	"ma_nganh": "7520601",
	},
	{"ten_nganh": "Kỹ thuật thăm dò và khảo sát",	
	"ma_nganh": "7520602",
	},
	{"ten_nganh": "Kỹ thuật dầu khí",	
	"ma_nganh": "7520604",
	},
	{"ten_nganh": "Kỹ thuật tuyển khoáng",	
	"ma_nganh": "7520607",
	},
	{"ten_nganh": "Địa chất học",	
	"ma_nganh": "7440201",
	},
	{"ten_nganh": "Công nghệ dầu khí và khai thác dầu",	
	"ma_nganh": "7510701",
	},
]

var data_DM = [
	{"ten_nganh": "Công nghệ sợi, dệt",	
	"ma_nganh": "7540202",
	},
	{"ten_nganh": "Công nghệ vật liệu dệt, may",	
	"ma_nganh": "7540203",
	},
	{"ten_nganh": "Công nghệ dệt, may",	
	"ma_nganh": "7540204",
	},
	{"ten_nganh": "Công nghệ may",	
	"ma_nganh": "7540205",
	},
	{"ten_nganh": "Công nghệ da giày",	
	"ma_nganh": "7540206",
	},
]

var dataLLT = [
	{"ten_nganh": "Nông nghiệp",	
	"ma_nganh": "7620101",
	},
	{"ten_nganh": "Khuyến nông",	
	"ma_nganh": "7620102",
	},
	{"ten_nganh": "Khoa học đất",	
	"ma_nganh": "7620103",
	},
	{"ten_nganh": "Chăn nuôi",	
	"ma_nganh": "7620105",
	},
	{"ten_nganh": "Chăn nuôi – Thú y",	
	"ma_nganh": "7620106",
	},
	{"ten_nganh": "Phân bón và dinh dưỡng cây trồng",	
	"ma_nganh": "7620108",
	},
	{"ten_nganh": "Nông học",	
	"ma_nganh": "7620109",
	},
	{"ten_nganh": "Khoa học cây trồng",	
	"ma_nganh": "7620110",
	},
	{"ten_nganh": "Bảo vệ thực vật",	
	"ma_nganh": "7620112",
	},
	{"ten_nganh": "Công nghệ rau hoa quả và cảnh quan",	
	"ma_nganh": "7620113",
	},
	{"ten_nganh": "Kinh doanh nông nghiệp",	
	"ma_nganh": "7620114",
	},
	{"ten_nganh": "Kinh tế nông nghiệp",	
	"ma_nganh": "7620115",
	},
	{"ten_nganh": "Phát triển nông thôn",	
	"ma_nganh": "7620116",
	},
	{"ten_nganh": "Nông nghiệp công nghệ cao",	
	"ma_nganh": "7620118",
	},
	{"ten_nganh": "Thú y",	
	"ma_nganh": "7640101",
	},
	{"ten_nganh": "Lâm học",	
	"ma_nganh": "7620201",
	},
	{"ten_nganh": "Lâm nghiệp đô thị",	
	"ma_nganh": "7620202",
	},
	{"ten_nganh": "Lâm sinh",	
	"ma_nganh": "7620205",
	},
	{"ten_nganh": "Quản lý tài nguyên rừng (Kiểm lâm)",	
	"ma_nganh": "7620211",
	},
	{"ten_nganh": "Công nghệ chế biến lâm sản",	
	"ma_nganh": "7549001",
	},
	{"ten_nganh": "Nuôi trồng thủy sản",	
	"ma_nganh": "7620301",
	},
	{"ten_nganh": "Bệnh học thủy sản",	
	"ma_nganh": "7620302",
	},
	{"ten_nganh": "Khoa học thủy sản",	
	"ma_nganh": "7620303",
	},
	{"ten_nganh": "Khai thác thủy sản",	
	"ma_nganh": "7620304",
	},
	{"ten_nganh": "Quản lý thủy sản",	
	"ma_nganh": "7620305",
	},
]

var datCNTT = [
	{"ten_nganh": "Khoa học máy tính",	
	"ma_nganh": "7480101",
	},
	{"ten_nganh": "Mạng máy tính và truyền thông dữ liệu",	
	"ma_nganh": "7480102",
	},
	{"ten_nganh": "Kỹ thuật phần mềm",	
	"ma_nganh": "7480103",
	},
	{"ten_nganh": "Hệ thống thông tin",	
	"ma_nganh": "7480104",
	},
	{"ten_nganh": "Máy tính và Khoa học thông tin",	
	"ma_nganh": "7480105",
	},
	{"ten_nganh": "Kỹ thuật máy tính",	
	"ma_nganh": "7480106",
	},
	{"ten_nganh": "Quản trị và phân tích dữ liệu",	
	"ma_nganh": "7480107",
	},
	{"ten_nganh": "Công nghệ kỹ thuật máy tính",	
	"ma_nganh": "7480108",
	},
	{"ten_nganh": "Khoa học dữ liệu",	
	"ma_nganh": "7480109",
	},
	{"ten_nganh": "Tin học và Kỹ thuật máy tính",	
	"ma_nganh": "7480111",
	},
	{"ten_nganh": "Công nghệ thông tin",	
	"ma_nganh": "7480201",
	},
	{"ten_nganh": "An toàn thông tin",	
	"ma_nganh": "7480202",
	},
	{"ten_nganh": "Công nghệ đa phương tiện",	
	"ma_nganh": "7480203",
	},
	{"ten_nganh": "Khoa học và Kỹ thuật máy tính",	
	"ma_nganh": "7480204",
	},
	{"ten_nganh": "Khoa học dữ liệu theo cơ chế đặc thù",	
	"ma_nganh": "7480205",
	},
	{"ten_nganh": "Địa tin học",	
	"ma_nganh": "7480206",
	},
]

var data_nganhC = data_nganhC.map(function(data, index) {
	return `<tr>   
                <td>${data['ten_nganhC']}</td>
                 <td>${data['maC']}</td>    
            </tr>`
})

$('.body-chinhtri').html(data_nganhC.join(''))

var data_nganhT = data_nganhT.map(function(data, index) {
	return `<tr>   
                <td>${data['ten_nganhT']}</td>
                 <td>${data['ma_nganhT']}</td>    
            </tr>`
})

$('.body-toan').html(data_nganhT.join(''))

var data_KT = data_KT.map(function(data, index) {
	return `<tr>   
                <td>${data['ten_nganhKT']}</td>
                 <td>${data['ma_nganh']}</td>    
            </tr>`
})

$('.body-xaydung').html(data_KT.join(''))

var data_KS = data_KS.map(function(data, index) {
	return `<tr>   
                <td>${data['ten_nganh']}</td>
                 <td>${data['ma_nganh']}</td>    
            </tr>`
})

$('.body-khoangsan').html(data_KS.join(''))

var data_DM = data_DM.map(function(data, index) {
	return `<tr>   
                <td>${data['ten_nganh']}</td>
                 <td>${data['ma_nganh']}</td>    
            </tr>`
})

$('.body-detmay').html(data_DM.join(''))

var dataLLT = dataLLT.map(function(data, index) {
	return `<tr>   
                <td>${data['ten_nganh']}</td>
                 <td>${data['ma_nganh']}</td>    
            </tr>`
})

$('.body-nongnghiep').html(dataLLT.join(''))

var datCNTT = datCNTT.map(function(data, index) {
	return `<tr>   
                <td>${data['ten_nganh']}</td>
                 <td>${data['ma_nganh']}</td>    
            </tr>`
})

$('.body-cntt').html(datCNTT.join(''))

});





 

 

 

 

 

 

 

 

 


