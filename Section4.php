// Encapsulation: đóng gói tất cả dữ liệu và các hàm thành viên lại với nhau để tạo thành một đối tượng.
// Tính kế thừa (inheritance) đề cập đến việc định nghĩa một lớp mới (new class) dựa trên một lớp cũ đã có (existing class). Lớp mới được gọi là lớp dẫn xuất (derived class) hay lớp con (child class). Lớp cũ đã có gọi là lớp cơ sở (base class) hoặc lớp cha (parent class).
// Tính đa hình trong lập trình OOP cho phép các đối tượng khác nhau thực thi chức năng giống nhau theo những cách khác nhau.

<?php 
 abstract class Shape {
    abstract function area();
 }

 class Circe extends Shape {
    public function area(){

    }

 }

 class Rectagle extends Shape {
   public function area(){
        
    }
 }
 // Khai bao Ham abstract su dung chung cho 2 class

?>