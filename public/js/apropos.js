document.addEventListener("DOMContentLoaded", () => {

    // TYPING EFFECT
    const el = document.getElementById("typing-text");
    const text = el.dataset.text;
    let i = 0, deleting = false, timer;
    const cursor = document.createElement("span");
    cursor.className = "cursor";
    el.after(cursor);

    function type() {
        if (!deleting && i < text.length) el.textContent += text[i++];
        else if (!deleting && i === text.length) setTimeout(()=>deleting=true,1000);
        else if (deleting && i>0) el.textContent=text.substring(0,--i);
        else deleting=false;
        timer=setTimeout(type,deleting?80:120);
    }

    const typingObserver=new IntersectionObserver(entries=>{
        entries.forEach(entry=>{
            if(entry.isIntersecting && !timer) type();
            else if(!entry.isIntersecting){ clearTimeout(timer); timer=null; el.textContent=""; i=0; deleting=false;}
        });
    },{threshold:0.6});
    typingObserver.observe(el);

    // SCROLL ANIMATIONS
    const leftItems=document.querySelectorAll(".left-text > *");
    const rightItems=document.querySelectorAll(".right-list li");
    [...leftItems,...rightItems].forEach(el=>{
        new IntersectionObserver(entries=>{
            entries.forEach(entry=>{
                if(entry.isIntersecting)
                    entry.target.classList.add(entry.target.closest(".left-text")?"animate-up":"animate-right");
            });
        },{threshold:0.2}).observe(el);
    });

    // FEATURES ANIMATION
    document.querySelectorAll(".feature-card").forEach(card=>{
        new IntersectionObserver(entries=>{
            entries.forEach(entry=>{ if(entry.isIntersecting) entry.target.classList.add("show-card"); });
        },{threshold:0.3}).observe(card);
    });

    // ABOUT ANIMATION
    document.querySelectorAll(".about-text, .about-image").forEach(el=>{
        new IntersectionObserver(entries=>{
            entries.forEach(entry=>{ if(entry.isIntersecting) entry.target.classList.add("active"); });
        },{threshold:0.2}).observe(el);
    });

    // ENGAGEMENT ANIMATION
    document.querySelectorAll(".engagement-card").forEach(card=>{
        new IntersectionObserver(entries=>{
            entries.forEach(entry=>{ if(entry.isIntersecting) entry.target.classList.add("show"); });
        },{threshold:0.2}).observe(card);
    });

});
