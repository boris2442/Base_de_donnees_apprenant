
console.log("text");
const title=document.querySelector("h1");
const typewriter=new Typewriter(title,{
    loop:true,
    delay:50
})
typewriter
.typeString("Bienvenue dans la structure AM CORPORATION")
.pauseFor(2000)
.deleteAll()
.pauseFor(2000)
.start()


const titleTable=document.querySelector(".title-table");
const typewriterTable=new Typewriter(titleTable, {
    loop:true,
    delay:50
})

typewriterTable
    .typeString("Veuillez remplir ce formulaire pour ajouter un nouvel etudiant")
    .pauseFor(2000)
    .deleteAll()
    .pauseFor(2000)
    .start()
 

    const sr= ScrollReveal({
        origin: 'top',
        distance: '50px',
        duration: 2000,
        reset: true,
        easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)'
    })
    sr.reveal(".paragraphe, .enregistrement, .imageHome, .titleHome, .copy, .paragrapheLink, .titleEnregistrement, .table", {interval:200});



    const wipe=document.querySelector(".wipe-transition");
const bandes=document.querySelectorAll(".bandes")
    const TLAnim=new TimelineMax();

   function delay(n)  {
    return new Promise((done)=>{
        setTimeout(()=>{
            done();
        }, n)
    })
   }
    barba.init({
        sync:true,

        transitions:[
            {

                async leave(){
                    const done=this.async();
                    TLAnim
                    .to(bandes, {height:'100%', stagger:0.09})
                //   TLAnim.to(wipe, {left:'0%', ease:"power2", duration:0.5});
                  await delay(1500)
                  done()

                },
                 enter(){
                    TLAnim
                    // .to(wipe, {left: '100%', ease:"power2.in", duration:0.5})
                    // .set(wipe, {left:'-100%'})
                TLAnim
                .to(bandes, {height:'0%', stagger:0.05})

                 }

            }
        ]
    })