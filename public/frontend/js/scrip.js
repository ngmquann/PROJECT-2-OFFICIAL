
  // Lấy đối tượng mục menu và thêm sự kiện click
  const menuItems = document.querySelectorAll(".u-nav-item a");
  menuItems.forEach(item => {
    item.addEventListener("click", function(event) {
      // Ngăn chặn hành vi mặc định của thẻ a
      event.preventDefault();

      // Xóa lớp active khỏi tất cả các mục menu
      menuItems.forEach(item => item.parentElement.classList.remove("active"));

      // Thêm lớp active vào mục menu tương ứng với mục đang được nhấp
      this.parentElement.classList.add("active");
    });
  });

