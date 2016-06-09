# IzWidget
# Ghi chú:
- Widget là gì?
Tương tự như block của magento. Widget bao gồm 1 file php chứa data và 1 file template.
Widget được gọi từ layout.
Điểm hay ho ở đây là File chứa data thì không thay đổi và luôn nằm trong thư mục widget. Còn file template thì lại tùy thuộc vào từng theme.
Ở mỗi theme thì lại có 1 file template.

- Sau này phần frontend sẽ sử dụng widget rất nhiều.
- Tương tự như wordpress. Có thể config để add thêm các widget trong 1 page.
- Còn 1 cái nữa là tạo ra các custom page. Cùng với các page do người dụng tạo ra có thể config được để mở ra từ 
1 link hoặc từ menu.(Khác với widget là có thể có nhiều widget trong 1 page và custom page để chứa widget)
- Cần thêm chức năng cho widget có thể config được. Thêm function initConfig để generate trong phần cài đặt widget.