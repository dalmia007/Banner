<!DOCTYPE html>
<html lang="en">
<head>
  <title>Banners</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-5">
  <h2>New Banner</h2>
  <div class="row">
    <div class="col-sm-4">
        <form method="POST" action="/banner-store">
        @csrf
        <label>Movie Title</label>
        <input type="text" name="title" class="form-control" value="{{old('title')}}"/>
        @if($errors->has('title'))
        <p class="text-danger">{{$errors->first('title')}}</p>
        @endif
        <label class="my-2">URL</label>
        <input type="text" name="url" class="form-control" value="{{old('url')}}"/>
        @if($errors->has('url'))
        <p class="text-danger">{{$errors->first('url')}}</p>
        @endif
        <label class="my-2">Mobile Image URL</label>
        <input type="text" name="image_mobile" class="form-control" value="{{old('image_mobile')}}"/>
        @if($errors->has('image_mobile'))
        <p class="text-danger">{{$errors->first('image_mobile')}}</p>
        @endif
        <label class="my-2">Desktop Image URL</label>
        <input type="text" name="image_desktop" class="form-control" value="{{old('image_desktop')}}"/>
        @if($errors->has('image_desktop'))
        <p class="text-danger">{{$errors->first('image_desktop')}}</p>
        @endif
        <button class="btn btn-info mt-4" type="submit">Create</button>
        </form>
    </div>
</div>

</body>
</html>
