<h1>Articles</h1>

@if (count($articles) > 0)
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Category</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($articles as $article)
        <tr>
          <td>{{ $article->title }}</td>
          <td>{{ Str::limit($article->content, 100) }}</td>
          <td>{{ $article->category->name ?? '' }}  </td>
          <td>
            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline-block">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ route('articles.create') }}" class="btn btn-success">Create New Article</a>
@else
  <p>No articles found.</p>
@endif
