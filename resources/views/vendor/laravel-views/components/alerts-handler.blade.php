<div
  x-cloak
  x-data='{ open: false, message: "", type: "success" }'
  x-init="@this.on('notify', (notification) => {
    open = true;
    message = notification.message;
    type = notification.type;
    setTimeout(() => { open = false }, 3000) 
  })"
>
  <div x-show="open">
    <x-lv-alert type='danger' onClose='open = false'>
      <div x-text='message'></div>
    </x-lv-alert>
  </div>
  <div x-show="open">
    <x-lv-alert onClose='open = false'>
      <div x-text='message'></div>
    </x-lv-alert>
  </div>
</div>