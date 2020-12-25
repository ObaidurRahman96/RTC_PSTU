{{-- <script type="text/javascript">
    window.onload = function(){
      var url = window.location.href;
      var str = "#me_";
      if (window.location.href.indexOf(str) == -1){
        location.replace(url+str);
      }
    }
  </script> --}}
  {{-- Font-icon css --}}
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>

  {{-- Main CSS --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('public/admins/css/main.css') }}">


  {{-- Toastr CSS --}}
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

  <script src="{{ asset('public/admins/js/jquery-3.2.1.min.js') }}"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  {{-- SimpleBar CSS --}}
  <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />

  <link href="{!! asset('public/admins/css/custom.css') !!}" rel="stylesheet" type="text/css" />
  <link href="{!! asset('public/admins/css/chart.css') !!}" rel="stylesheet" type="text/css" />
  <link href="{!! asset('public/admins/css/404.css') !!}" rel="stylesheet" type="text/css" />

  <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">

  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <script type="text/javascript">
   toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "1000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
</script>

<style>
  [v-cloak] .v-cloak--block {
    display: block;
  }
  [v-cloak] .v-cloak--inline {
    display: inline;
  }
  [v-cloak] .v-cloak--inlineBlock {
    display: inline-block;
  }
  [v-cloak] .v-cloak--hidden {
    display: none;
  }
  [v-cloak] .v-cloak--invisible {
    visibility: hidden;
  }
  .v-cloak--block,
  .v-cloak--inline,
  .v-cloak--inlineBlock {
    display: none;
  }
  i.fa.fa-spinner.fa-pulse.fa-3x.fa-fw {
    margin-left: 46%;
    bottom: 50%;
    margin-top: 11%;
  }
</style>
