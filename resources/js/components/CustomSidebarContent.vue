<script setup lang="ts">
import { Button } from '@/components/ui/button';
import { Separator } from '@/components/ui/separator';
import { type NavItem } from '@/types';
import { Link, usePage } from '@inertiajs/vue3';
import { Github } from 'lucide-vue-next';

const resourcesNavItems: NavItem[] = [
    {
        title: 'Github Repo',
        href: 'https://github.com/nickc404/laravel-notes-app',
        icon: Github,
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
                <h4 class="mb-1 px-2 py-1.5 text-sm font-semibold">Notes</h4>


                <Separator class="my-4" />

                <h4 class="mb-1 px-2 py-1.5 text-sm font-semibold">Resources</h4>
                <Button
                    v-for="item in resourcesNavItems"
                    :key="item.href"
                    variant="ghost"
                    :class="['w-full justify-start gap-2', { 'bg-muted': currentPath === item.href }]"
                    as-child
                >
                    <a :href="item.href" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2">
                        <component :is="item.icon" class="h-4 w-4" />
                        {{ item.title }}
                    </a>
                </Button>
            </nav>
        </div>
    </div>
</template>
