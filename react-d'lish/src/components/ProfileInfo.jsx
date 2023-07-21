import ExamplePfp from "../..//src/assets/img/example-pfp.jpg";

export default function ProfileInfo() {
  return (
    <>
        <div id="profile-pic" className="w-full flex justify-center">
            <img src={ExamplePfp} className="-mt-28 w-48 h-48 lg:w-56 lg:h-56 rounded-full border-8 border-solid border-[#202949] transition-all" alt="profile-pic" />
        </div>
        
        <div id="profile-name" className="my-5 fa-custom">
            <p className="font-title text-3xl lg:text-4xl text-center font-bold tracking-wide transition-all">
                Javier Enrique Mejía Flores
            </p>
        </div>
    </>
  )
}
