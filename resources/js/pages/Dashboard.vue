<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { TrashIcon, PinIcon, EllipsisVerticalIcon, PencilIcon } from 'lucide-vue-next';
import { DropdownMenu, DropdownMenuTrigger, DropdownMenuContent, DropdownMenuLabel, DropdownMenuSeparator, DropdownMenuRadioGroup, DropdownMenuRadioItem } from '@/components/ui/dropdown-menu';
import { Button } from '@/components/ui/button';
import { ref } from 'vue';

defineProps(['notes', 'user']);
const position = ref('bottom');
</script>

<template>
    <Head title="Dashboard" />
    <AppLayout>
        <div class="flex pt-5 pl-20">
            <p class="text-2xl">Hello, {{ user.name }}</p>
        </div>
        <div class="grid grid-cols-3 gap-4 p-6">
            <div v-for="note in notes" :key="note.id" class="bg-gray-400/30 backdrop-blur-md p-4 rounded-lg border border-cyan-200/20 shadow-lg">
                <div class="flex justify-between gap-2">
                    <Link :href="route('dashboard')" class="flex items-center gap-2 font-semibold">
                        <p class="text-lg font-bold">{{ note.title }}</p>
                    </Link>

<!--                    <DropdownMenu>-->
<!--                        <DropdownMenuTrigger as-child>-->
<!--                            <Button variant="ghost" class="size-4">-->
<!--                                <EllipsisVerticalIcon class="h-4 w-4" />-->
<!--                            </Button>-->
<!--                        </DropdownMenuTrigger>-->
<!--                        <DropdownMenuContent class="w-56">-->
<!--                            <DropdownMenuLabel>Options</DropdownMenuLabel>-->
<!--                            <DropdownMenuSeparator />-->
<!--                            <DropdownMenuGroup v-model="position">-->
<!--                                <DropdownMenuItem value="top">-->
<!--                                    <p class="pl-3">Edit</p>-->
<!--                                </DropdownMenuItem>-->
<!--                            </DropdownMenuGroup>-->
<!--                        </DropdownMenuContent>-->
<!--                    </DropdownMenu>-->
                </div>
                <p class="text-sm pt-5">{{ note.content.length > 100 ? note.content.slice(0, 100) + '...' : note.content }}</p>
                <div class="flex justify-start gap-2 pt-5">
                    <Link :href="route('dashboard')" class="flex items-center gap-2 font-semibold">
                        <TrashIcon class="h-4 w-4 text-red-500" />
                    </Link>
                    <PinIcon class="h-4 w-4 text-yellow-500" />
                </div>
            </div>
        </div>

    </AppLayout>
</template>
