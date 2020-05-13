@foreach($listItem as $item)
    <div class="p-1 col-md-4">
        <div class="card col-md-12">
            <a href="{{ url('item/'.$item->name_url."/".$item->id) }}" style="text-decoration: none; color: black;">
                <div class="card-body">
                    <img style="border-radius: 10px;" src="https://linkneverdie.com/Assets/Imgs/Post/thumbnail6596.jpg" width="100%">
                    <h5 class="p-1 mb-0">{{ $item->name }}</h5>
                    <p class="mb-2">
                        @if(count($item->Categorys))
                            @foreach($item->Categorys as $category)
                                <a href="{{ url('category/'.$category->name_url."/".$category->id) }}" class="badge badge-pill badge-info">{{ $category->name }}</a>
                            @endforeach
                        @else
                            <a class="badge badge-pill badge-warning">Chưa có chủ đề</a>
                        @endif
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <i class="far fa-calendar"></i>
                            <span>{{ $item->updated_at->toDateString() }}</span>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('user/profile/?id='.$item->User->id ) }}">{{ $item->User->first_name." ".$item->User->last_name }}</a>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endforeach