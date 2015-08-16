<!-- basic scripts -->
		{{HTML::script("1.9.1/jquery.min.js")}}
		<script type="text/javascript">
		window.jQuery || document.write("<script src='js/jquery-1.9.1.min.js'>\x3C/script>");
		</script>
		
		{{HTML::script("js/bootstrap.min.js")}}
		<!-- page specific plugin scripts -->
		
		<!--[if lt IE 9]>
		{{HTML::script("js/excanvas.min.js")}}
		<![endif]-->
		{{HTML::script("js/jquery-ui-1.10.2.custom.min.js")}}
		{{HTML::script("js/jquery.ui.touch-punch.min.js")}}
		{{HTML::script("js/chosen.jquery.min.js")}}
		{{HTML::script("js/fuelux.spinner.js")}}
		{{HTML::script("js/bootstrap-datepicker.min.js")}}
		{{HTML::script("js/bootstrap-timepicker.min.js")}}
		{{HTML::script("js/date.js")}}
		{{HTML::script("js/daterangepicker.min.js")}}
		{{HTML::script("js/bootstrap-colorpicker.min.js")}}
		{{HTML::script("js/jquery.knob.min.js")}}
		{{HTML::script("js/jquery.autosize-min.js")}}
		{{HTML::script("js/jquery.inputlimiter.1.3.1.min.js")}}
		{{HTML::script("js/jquery.maskedinput.min.js")}}
		<!-- ace scripts -->
		{{HTML::script("js/ace-elements.min.js")}}
		{{HTML::script("js/ace.min.js")}}
        @yield('script')