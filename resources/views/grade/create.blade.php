<h1>thêm lớp ở đây</h1>
<!-- action gọi đến tên của đường dẫn -->
<form action="{{ route('store') }}" method="POST">
    <!-- thêm token vào form -->
    @csrf
    tên : <input type="text" name="name1" required ><br>
    <button>OKE</button>
</form>