<script setup lang="ts">
    import { Separator } from '@/components/ui/separator';
    import { Link } from '@inertiajs/vue3';
    import { NotebookPen } from 'lucide-vue-next';
</script>

<template>
    <div class="flex h-full flex-col">
        <div class="flex h-14 items-center border-b px-4">
            <Link :href="route('dashboard')" class="flex items-center gap-2 font-semibold">
                <span>Laravel Notes</span>
            </Link>
        </div>
        <div class="flex-1 overflow-auto py-2">
            <nav class="grid items-start px-2 text-sm font-medium">
                <div class="text-sm">
                    <h4 class="mb-1 px-2 py-1.5 text-sm font-semibold flex items-center gap-1">
                        <NotebookPen class="h-4 w-4 text-cyan-400" />
                        <span>Notes</span>
                    </h4>
                </div>

            </nav>
        </div>
    </div>
</template>
