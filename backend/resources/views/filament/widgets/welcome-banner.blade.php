<x-filament-widgets::widget>
    <x-filament::section>
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold tracking-tight text-emerald-600">
                    Welcome Back, {{ $userName }}! 👋
                </h2>
                <p class="text-sm text-gray-500 mt-1">
                    You have <span class="font-bold text-emerald-500">{{ $pendingOrders }}</span> pending orders 
                    and <span class="font-bold text-rose-500">{{ $lowStockCount }}</span> items running low on stock.
                </p>
            </div>
            <div class="hidden md:flex gap-3">
                <x-filament::button href="/admin/orders" tag="a" color="info" size="sm" icon="heroicon-m-shopping-cart">
                    Manage Orders
                </x-filament::button>
            </div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>