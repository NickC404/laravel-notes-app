<script setup lang="ts">
import NavUser from '@/components/NavUser.vue';
import { Sidebar, SidebarContent, SidebarFooter } from '@/components/ui/sidebar';
</script>

<template>
    <Sidebar collapsible="icon" variant="inset" :defaultOpen="false">
        <SidebarContent />
        <SidebarFooter>
            <NavUser />
        </SidebarFooter>
    </Sidebar>
    <slot />
</template>
