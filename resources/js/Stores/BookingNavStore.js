import { defineStore } from "pinia";

export const useBookingNavStore = defineStore("BookingNavStore",{
    state : () => {
        return {
            activeTab: ""
        }
    },
    getters : {
        ActiveTab () {
            return this.activeTab
        }
    },
    actions : {
        setActiveTab (tab) {
            this.activeTab = tab
        }
    }
});
