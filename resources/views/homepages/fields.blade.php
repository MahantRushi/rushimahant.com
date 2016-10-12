<!-- Order Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order', 'Order:') !!}
    {!! Form::number('order', null, ['class' => 'form-control']) !!}
</div>

<!-- Icon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('icon', 'Icon:') !!}
    {!! Form::select('icon', ['album' => 'album', 'arc' => 'arc', 'back-2' => 'back-2', 'bandaid' => 'bandaid', 'car' => 'car', 'diamond' => 'diamond', 'door-lock' => 'door-lock', 'eyedropper' => 'eyedropper', 'female' => 'female', 'gym' => 'gym', 'hammer' => 'hammer', 'headphones' => 'headphones', 'helm' => 'helm', 'hourglass' => 'hourglass', 'leaf' => 'leaf', 'magic-wand' => 'magic-wand', 'male' => 'male', 'map-2' => 'map-2', 'next-2' => 'next-2', 'paint-bucket' => 'paint-bucket', 'pendrive' => 'pendrive', 'photo' => 'photo', 'piggy' => 'piggy', 'plugin' => 'plugin', 'refresh-2' => 'refresh-2', 'rocket' => 'rocket', 'settings' => 'settings', 'shield' => 'shield', 'smile' => 'smile', 'usb' => 'usb', 'vector' => 'vector', 'wine' => 'wine', 'cloud-upload' => 'cloud-upload', 'cash' => 'cash', 'close' => 'close', 'bluetooth' => 'bluetooth', 'cloud-download' => 'cloud-download', 'way' => 'way', 'close-circle' => 'close-circle', 'id' => 'id', 'angle-up' => 'angle-up', 'wristwatch' => 'wristwatch', 'angle-up-circle' => 'angle-up-circle', 'world' => 'world', 'angle-right' => 'angle-right', 'volume' => 'volume', 'angle-right-circle' => 'angle-right-circle', 'users' => 'users', 'angle-left' => 'angle-left', 'user-female' => 'user-female', 'angle-left-circle' => 'angle-left-circle', 'up-arrow' => 'up-arrow', 'angle-down' => 'angle-down', 'switch' => 'switch', 'angle-down-circle' => 'angle-down-circle', 'scissors' => 'scissors', 'wallet' => 'wallet', 'safe' => 'safe', 'volume2' => 'volume2', 'volume1' => 'volume1', 'voicemail' => 'voicemail', 'video' => 'video', 'user' => 'user', 'upload' => 'upload', 'unlock' => 'unlock', 'umbrella' => 'umbrella', 'trash' => 'trash', 'tools' => 'tools', 'timer' => 'timer', 'ticket' => 'ticket', 'target' => 'target', 'sun' => 'sun', 'study' => 'study', 'stopwatch' => 'stopwatch', 'star' => 'star', 'speaker' => 'speaker', 'signal' => 'signal', 'shuffle' => 'shuffle', 'shopbag' => 'shopbag', 'share' => 'share', 'server' => 'server', 'search' => 'search', 'film' => 'film', 'science' => 'science', 'disk' => 'disk', 'ribbon' => 'ribbon', 'repeat' => 'repeat', 'refresh' => 'refresh', 'add-user' => 'add-user', 'refresh-cloud' => 'refresh-cloud', 'paperclip' => 'paperclip', 'radio' => 'radio', 'note2' => 'note2', 'print' => 'print', 'network' => 'network', 'prev' => 'prev', 'mute' => 'mute', 'power' => 'power', 'medal' => 'medal', 'portfolio' => 'portfolio', 'like2' => 'like2', 'plus' => 'plus', 'left-arrow' => 'left-arrow', 'play' => 'play', 'key' => 'key', 'plane' => 'plane', 'joy' => 'joy', 'photo-gallery' => 'photo-gallery', 'pin' => 'pin', 'phone' => 'phone', 'plug' => 'plug', 'pen' => 'pen', 'right-arrow' => 'right-arrow', 'paper-plane' => 'paper-plane', 'delete-user' => 'delete-user', 'paint' => 'paint', 'bottom-arrow' => 'bottom-arrow', 'notebook' => 'notebook', 'note' => 'note', 'next' => 'next', 'news-paper' => 'news-paper', 'musiclist' => 'musiclist', 'music' => 'music', 'mouse' => 'mouse', 'more' => 'more', 'moon' => 'moon', 'monitor' => 'monitor', 'micro' => 'micro', 'menu' => 'menu', 'map' => 'map', 'map-marker' => 'map-marker', 'mail' => 'mail', 'mail-open' => 'mail-open', 'mail-open-file' => 'mail-open-file', 'magnet' => 'magnet', 'loop' => 'loop', 'look' => 'look', 'lock' => 'lock', 'lintern' => 'lintern', 'link' => 'link', 'like' => 'like', 'light' => 'light', 'less' => 'less', 'keypad' => 'keypad', 'junk' => 'junk', 'info' => 'info', 'home' => 'home', 'help2' => 'help2', 'help1' => 'help1', 'graph3' => 'graph3', 'graph2' => 'graph2', 'graph1' => 'graph1', 'graph' => 'graph', 'global' => 'global', 'gleam' => 'gleam', 'glasses' => 'glasses', 'gift' => 'gift', 'folder' => 'folder', 'flag' => 'flag', 'filter' => 'filter', 'file' => 'file', 'expand1' => 'expand1', 'expand2' => 'expand2', 'edit' => 'edit', 'drop' => 'drop', 'drawer' => 'drawer', 'download' => 'download', 'display2' => 'display2', 'display1' => 'display1', 'diskette' => 'diskette', 'date' => 'date', 'cup' => 'cup', 'culture' => 'culture', 'crop' => 'crop', 'credit' => 'credit', 'copy-file' => 'copy-file', 'config' => 'config', 'compass' => 'compass', 'comment' => 'comment', 'coffee' => 'coffee', 'cloud' => 'cloud', 'clock' => 'clock', 'check' => 'check', 'chat' => 'chat', 'cart' => 'cart', 'camera' => 'camera', 'call' => 'call', 'calculator' => 'calculator', 'browser' => 'browser', 'box2' => 'box2', 'box1' => 'box1', 'bookmarks' => 'bookmarks', 'bicycle' => 'bicycle', 'bell' => 'bell', 'battery' => 'battery', 'ball' => 'ball', 'back' => 'back', 'attention' => 'attention', 'anchor' => 'anchor', 'albums' => 'albums', 'alarm' => 'alarm', 'airplay' => 'airplay'], null, ['class' => 'form-control select2icons']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Punchline Field -->
<div class="form-group col-sm-6">
    {!! Form::label('punchline', 'Punchline:') !!}
    {!! Form::text('punchline', null, ['class' => 'form-control']) !!}
</div>

<!-- Backgroundimage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('backgroundImage', 'Backgroundimage:') !!}
    {!! Form::file('backgroundImage') !!}
</div>
<div class="clearfix"></div>

<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>

<!-- Target Field -->
<div class="form-group col-sm-6">
    {!! Form::label('target', 'Target:') !!}
    {!! Form::select('target', ['_blank' => '_blank', '_self' => '_self'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('homepages.index') !!}" class="btn btn-default">Cancel</a>
</div>
