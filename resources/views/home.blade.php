<html>
<div>
    </div>

    <div class="p-8">


            <div>
                @if (isset($products))
                    @foreach ($products as $product)
                        <div>
                            <h4>{{ $product->name }}</h4>
                        </div>
                    @endforeach

                @endif
            </div>
        </div>
    </div>
</html>