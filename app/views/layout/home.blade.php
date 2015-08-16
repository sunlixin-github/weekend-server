@extends('layout.master')


@section('maincontent')
{{Form::open(['url'=>'home','id'=>'subweibofrm'])}}
<div class="row-fluid">
	<div class="span7">
		<h4>亲，说两句呗！</h4><span id='alert'></span>
    	<textarea class="span12 limited" name="w_content" id="w_content" data-maxlength="140"></textarea>
    </div>
</div>
<div class="row-fluid">
	<div class="span7">
	<button class="btn btn-mini btn-success pull-right" type="submit">提交</button></div>
</div>
{{Form::close()}}
@if(!is_null($weibos))
	@foreach($weibos as $weibo)
	<div class="row-fluid">
		<div class="span6">
    		<div class="itemdiv dialogdiv">
				<div class="user">{{HTML::image('avatars/'.$weibo['photo'],null,['class'=>'nav-user-photo'])}}</div>
				<div class="body">
					<div class="time"><i class="icon-time"></i> <span class="green">{{$weibo['subtime']}}</span></div>
					<div class="name"><a href="#">{{$weibo['alias']}}</a></div>
					<div class="text">{{$weibo['content']}}</div>
					<div class="hr hr8 hr-dotted"></div>
                	
					<div id="accordion2" class="accordion">
                		<div class="accordion-group">
                  			<div class="accordion-heading">
                    		<a href="#collapse{{$weibo['id']}}" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">评论(<span id="commentcount{{$weibo['id']}}">{{$weibo['commentcount']}}</span>)</a>
                  			</div>
                  			<div class="accordion-body collapse" id="collapse{{$weibo['id']}}">
                    			<div class="accordion-inner">
                    				{{Form::open(['url'=>'comment','name'=>'commentfrm','id'=>'commentfrm'.$weibo['id']])}}
                    				<input type="hidden" value="{{$weibo['id']}}" name="weibo_id">
                    				<textarea class="span12 limited" name="comment{{$weibo['id']}}" id="comment{{$weibo['id']}}" data-maxlength="140"></textarea>
                    				<button class="btn btn-mini btn-success pull-right"  type="submit">提交</button>
                    				{{Form::close()}}
                    			</div>
                    			<div class="accordion-inner" id="commdiv{{$weibo['id']}}">
                                {{$weibo['comment']}}
                    			</div>
                  			</div>
                		</div>
              		</div>
				</div>
           		
			</div>                    
		</div>
	</div>
	@endforeach
{{$weibopage->links()}}
@endif

@stop


@section('script')

<script type="text/javascript">
$(document).ready(function(e) {
    $('textarea[class*=limited]').each(function() {
		var limit = parseInt($(this).attr('data-maxlength')) || 100;
		$(this).inputlimiter({
			"limit": limit,
			remText: '%n 字符，还剩余%s',
			limitText: '最多允许输入 %n.'
		});
	});
	$('#subweibofrm').submit(function(){
		var len = $('#w_content').val().length;
		if(len == 0){
			$('#alert').html('一个字都没写呀！');
			return false;
		}else
		return true;
	});

	
	//$("input[id^='code']");//id属性以code开始的所有input标签
	$("form[name*='commentfrm']").each(function(){
		$(this).submit(function(){
			var num = $(this).find("input[name*='weibo_id']").val();

			var texts = $(this).find('textarea');
			var contents = texts.val();
			var commdiv = $('#commdiv'+num);
			var commcount_span = $('#commentcount'+num);
			
			$.post($(this).prop( 'action' ),
            	{
                "weibo_id": num,
                "contents": contents
            	},
            function(data) {
                
				texts.val('');
				//commdiv.html(data.id+'哈哈'+data.msg);
				var html="";
				var useralias = '';
				var subtime = '';
				var commcon = ''
				var i = 0;
				for(var key in data){
					useralias = data[key].alias;
					subtime = data[key].subtime;
					commcon = data[key].content;
					html += '<div class="name">'+useralias+'</div><div class="time"><span class="green">'+subtime;
					html += '</span></div><div class="text">'+commcon+'</div><div class="span12 hr hr8"></div>';
					i++;
				}
                commdiv.html(html);
				commcount_span.html(i);
            },
            'json'
			);
			return false;
		});
	});
});
function postcomment(id)
{
	var contents = $('#comment'+id).val();
	$.ajax({
		type:"POST",
		url:'http://xiaoweibo.org/comment',
		data:{'weibo_id':id,'contents':contents},
		dataType:'json',
		success:function(data){
			
			$('#xyz').html('OK');
		}
	});
}
</script>
@stop