<form action="" method="POST" style="text-align: left" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Tên ngành nghề</label>
        <input type="text" class="form-control"  value="{{ $career->c_name ?? '' }}" name="c_name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nổi bật</label>
        <select name="c_hot" class="form-control" id="">
            <option value="0" {{ $career->c_hot ?? 0 == 0 ? "selected" : "" }}>Mặc định</option>
            <option value="1" {{ $career->c_hot ?? 0 == 1 ? "selected" : "" }}>Nổi bật</option>
        </select>
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" name="c_avatar" class="custom-file-input" id="inputGroupFile01"
                       aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Chọn file từ máy tính</label>
            </div>
        </div>
        @if(isset($career->c_avatar))
            <img src="{{ pare_url_file($career->c_avatar) }}" style="width: 200px;height: auto" alt="">
        @endif
    </div>
    <div class="form-row mt-2">
        <div class="form-group col-md-5">
            <button type="submit" class="mb-2 btn btn-primary">Xử lý</button>
        </div>
    </div>
</form>
