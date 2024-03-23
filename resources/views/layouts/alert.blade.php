@if(session('success'))
<div class="alert alert-success">
 misstion sucsess
</div>

@endif

@if(session('failed'))
<div class="alert alert-danger">
    misstion faild
   </div>

 @endif  