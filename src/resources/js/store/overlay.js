import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export const overlay = new Vuex.Store({
        state: {
            OverlayShow: false

        },
        mutations: {

            setOverlayShow (state, payload) {
                state.OverlayShow = payload;
            }
        },
        actions: {
            setOverlayShow(context, payload) {
                context.commit('setOverlayShow', payload);
            }
        },
        getters: {
            getOverlayShow(state) {
                return state.OverlayShow;
            }
        }
    }
);
export default {
    overlay
}
