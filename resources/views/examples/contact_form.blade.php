<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="section-header">
        <h3>在线留言</h3>
    </div>
    <form class="contactus-form" method="post" action="/contact_submit">
        {{csrf_field()}}
        <input type="hidden" name="url" value="{{url()->current()}}">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <input type="text" required="" placeholder="名字" id="input_name" class="form-control" name="name">
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <input type="email" required="" placeholder="邮箱" id="input_email" class="form-control" name="email">
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <textarea placeholder="留言内容" id="textarea_message" class="form-control" name="message" rows="5"></textarea>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <input type="submit" name="post" title="Send" id="btn_submit2" value="发送留言">
            </div>
        </div>
    </form>
</div>