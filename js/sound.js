
//正解のサウンド
        const se     = document.querySelector('#seikai_sound');
        document.querySelector("#seikai_btn").addEventListener("click", () => {
            se.play();
        });

//間違いの時のサウンド
        const bathu    = document.querySelector('#bathu_sound');
        document.querySelector("#bathu_btn").addEventListener("click", () => {
            bathu.play();
        });
