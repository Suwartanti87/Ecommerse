@extends('layout.index')
@section('content')
@php
$data = App\Video::All();
$no = 1;
@endphp
<section class="section-margin">
    <div class="container">
      <div class="section-intro mb-75px">
        <h4 class="intro-title">Vlog</h4>
        <h2>Vlog Ubsy Bitsy</h2>
      </div>
<table>
  
    @foreach ($data as $video)
    <tr>
      <td>
        @if (! empty($video->nama))
        <video width="640" height="360"  controls>
          <source src="{{ asset('video/'.$video->nama) }}" type="video/mp4" width="auto">
          </video>
        </td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td align="center"><h3>{{ $video->judul }}
         <a href="{{ $video->link }}" target="blank">klik disini</a></h3>
       </a>
       {{ $video->deskripsi }}
       </td>
       @endif
     </tr>
   
 </tbody>
 @endforeach
</table>
</div>
</section>
@endsection