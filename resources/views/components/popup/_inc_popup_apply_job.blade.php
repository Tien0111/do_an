<div class="modal modal-md modal-apply" id="apply-form">
    <form id="form-apply" action="{{ route('ajax_post.add.apply_job') }}" method="POST" novalidate="novalidate" enctype="multipart/form-data">
        @csrf
        <div class="modal-header">
            <h2 class="title">Ứng tuyển: <span id="title-apply">Công ty TNHH MTV tư vấn thiết kế xây dựng SALA architecture</span></h2>
        </div>
        <div class="modal-body">
            <div class="new showb">
                <div class="type">
                    <a href="#" class="btn btn-type" style="display: none" data-button="online"><i class="la la-globe"></i> CV online</a>
                    <a href="#" class="btn btn-type hidden" data-button="upload"><i class="la la-upload"></i> Tự tải cv lên</a>
                </div>
                <div class="upload">
                    <div class="form-group">
                        <label>Họ và tên<span class="text-danger">*</span> :</label>
                        <input type="text" value="Phan Trung Phú" placeholder="Họ tên" name="name" class="form-control">
                        <p class="error-form"></p>
                    </div>
                    <div class="form-group">
                        <label>Upload CV<span class="text-danger">*</span> :</label>
                        <input type="file"  placeholder="Họ tên" name="file" class="form-control">
                        <p class="error-form"></p>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Số điện thoại<span class="text-danger">*</span> :</label>
                                <input type="text" value="0986420994" placeholder="Số điện thoại" name="phone" class="form-control">
                                <p class="error-form"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email<span class="text-danger">*</span> :</label>
                                <input type="text" value="0986420994" placeholder="Email" name="email" class="form-control">
                                <p class="error-form"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro">
                    <label>Thư giới thiệu: </label>
                    <textarea name="about" class="form-control" rows="3" placeholder="Viết giới thiệu ngắn gọn về bản thân (điểm mạnh, điểm yếu) và nêu rõ mong muốn, lý do làm việc tại công ty này. Đây là cách gây ấn tượng với nhà tuyển dụng nếu bạn có chưa có kinh nghiệm làm việc (hoặc CV không tốt)."></textarea>
                </div>
                <input type="hidden" name="hash_slug" id="hash_slug">
            </div>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn btn-gray" rel="modal:close">Huỷ bỏ</a>
            <a href="#" class="btn btn-pink js-store-apply">Nộp hồ sơ</a>
        </div>
    </form>
    <a href="#close-modal" rel="modal:close" class="close-modal "><i class="la la-times"></i></a>
</div>
