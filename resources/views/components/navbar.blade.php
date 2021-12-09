<nav class="navbar navbar-expand-lg {{ $navbar['bg-color'] }}">
    <a class="navbar-brand" href="#">{{ $navbar['brand'] }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @if(count($navbar['item']) > 0)
                @foreach($navbar['item'] as $value)
                    @if($value['item_dropdown'])
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ $value['item_url'] }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ $value['item_title'] }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach($value['item_drop-item'] as $drop)
                                    <a class="dropdown-item" href="{{ $drop['dropdown_url'] }}">{{ $drop['dropdown_title'] }}</a>
                                @endforeach
                            </div>
                        </li>
                    @else
                        @if($value['item_disable'])
                            <li class="nav-item">
                                <a class="nav-link disabled" href="{{ $value['item_url'] }}">Disabled</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ $value['item_url'] }}">{{ $value['item_title'] }}<span class="sr-only">(current)</span></a>
                            </li>
                        @endif
                    @endif
                @endforeach
            @endif
        </ul>
        @if(count($navbar['form']) > 0)
            <form class="form-inline my-2 my-lg-0">
                @foreach($navbar['form'] as $value)
                    @if($value['form_input'])
                        <input class="form-control mr-sm-2" type="search" placeholder="{{ $value['form_title'] }}" aria-label="Search">
                    @else
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">{{ $value['form_title'] }}</button>
                    @endif
                @endforeach
            </form>
        @endif
    </div>
</nav>