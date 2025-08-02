<script setup lang="ts">
import { Separator } from '@/components/ui/separator';
import { type NavItem } from '@/types';
import { Link, usePage } from '@inertiajs/vue3';
import { Folder, FolderOpen, NotebookPen } from 'lucide-vue-next';

const noteItems: NavItem[] = [
    {
        title: 'Note 1',
        href: '#'
    },
    {
        title: 'Note 2',
        href: '#'
    },
    {
        title: 'Note 3',
        href: '#'
    },
];

const folderItems: NavItem[] = [
    {
        title: 'Folder 1',
        href: '#',
        icon: Folder
    },
    {
        title: 'Folder 2',
        href: '#',
        icon: Folder
    },
    {
        title: 'Folder 3',
        href: '#',
        icon: FolderOpen
    },
];

const page = usePage();
const currentPath = page.url;
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
                <div class="h-100 w-48">
                    <div class="p-4">
                        <div v-for="item in noteItems" :key="item.href">
                            <div class="text-sm">
                                <a :href="item.href">{{ item.title }}</a>
                            </div>
                            <Separator class="my-2" />
                        </div>
                    </div>
                </div>
                <Separator class="my-4" />
                <div class="text-sm">
                    <h4 class="mb-1 px-2 py-1.5 text-sm font-semibold flex items-center gap-1">
                        <FolderOpen class="h-4 w-4 text-cyan-400" />
                        <span>Folders</span>
                    </h4>
                </div>
                <div class="h-72 w-48">
                    <div class="p-4">
                        <div v-for="item in folderItems" :key="item.href">
                            <div class="text-sm">
                                <a :href="item.href" class="flex items-center gap-1">
                                    <span>{{ item.title }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</template>
