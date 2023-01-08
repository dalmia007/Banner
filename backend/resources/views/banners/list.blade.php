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
  <h2>Banners<a href="/banner-create" class="btn btn-info ml-2">New Banner</a></h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach($banners as $banner)
      <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$banner->title}}</td>
        <td class="d-flex flex-row">
        <a href="/banner-edit/{{$banner->id}}" class="btn btn-sm btn-info">Edit</a>
        <form method="post" action="/banner-delete/{{$banner->id}}">
                @csrf
                @method('delete')
            <button type="submit" class="btn btn-sm btn-danger ml-2">Delete</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
