<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<style>    .desktop {
    background-color: #ffffff;
    display: flex;
    flex-direction: row;
    justify-content: center;
    width: 100%;
}

.desktop .div {
    background-color: #ffffff;
    width: 1440px;
    height: 1024px;
    position: relative;
}

.desktop .group {
    position: absolute;
    width: 315px;
    height: 83px;
    top: 33px;
    left: 30px;
}

.desktop .text-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    font-family: "Poppins-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 35px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .p {
    position: absolute;
    top: 53px;
    left: 0;
    font-family: "Poppins-Regular", Helvetica;
    font-weight: 400;
    color: #a5a5a5;
    font-size: 20px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .group-2 {
    position: absolute;
    width: 1058px;
    height: 104px;
    top: 176px;
    left: 30px;
}

.desktop .overlap {
    position: absolute;
    width: 328px;
    height: 104px;
    top: 0;
    left: 0;
    background-color: #e9d9ff;
    border-radius: 6px;
}

.desktop .text-wrapper-2 {
    position: absolute;
    top: 11px;
    left: 23px;
    font-family: "Poppins-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 20px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .element {
    position: absolute;
    top: 45px;
    left: 23px;
    font-family: "Poppins-Medium", Helvetica;
    font-weight: 400;
    color: transparent;
    font-size: 35px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .span {
    font-weight: 500;
    color: #000000;
}

.desktop .text-wrapper-3 {
    font-family: "Poppins-Regular", Helvetica;
    color: #4f4e4e;
    font-size: 20px;
}

.desktop .overlap-group {
    position: absolute;
    width: 328px;
    height: 104px;
    top: 0;
    left: 359px;
    background-color: #d2f0dd;
    border-radius: 6px;
}

.desktop .element-2 {
    position: absolute;
    top: 45px;
    left: 18px;
    font-family: "Poppins-Medium", Helvetica;
    font-weight: 400;
    color: transparent;
    font-size: 35px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .text-wrapper-4 {
    position: absolute;
    top: 11px;
    left: 18px;
    font-family: "Poppins-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 20px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .overlap-group-2 {
    position: absolute;
    width: 328px;
    height: 104px;
    top: 0;
    left: 718px;
    background-color: #dde1ff;
    border-radius: 6px;
}

.desktop .element-projects {
    position: absolute;
    top: 45px;
    left: 17px;
    font-family: "Poppins-Medium", Helvetica;
    font-weight: 400;
    color: transparent;
    font-size: 35px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .overlap-wrapper {
    position: absolute;
    width: 297px;
    height: 1024px;
    top: 0;
    left: 0;
}

.desktop .overlap-2 {
    position: relative;
    width: 295px;
    height: 1024px;
    border-right: 3px solid;
    border-color: #f2f2f2;
}

.desktop .ellipse {
    position: absolute;
    width: 63px;
    height: 63px;
    top: 10px;
    left: 17px;
    background-color: #b67ffd;
    border-radius: 31.5px;
}

.desktop .text-wrapper-5 {
    position: absolute;
    top: 148px;
    left: 17px;
    font-family: "Poppins-Regular", Helvetica;
    font-weight: 400;
    color: #9b9b9b;
    font-size: 20px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .group-3 {
    position: absolute;
    width: 112px;
    height: 31px;
    top: 214px;
    left: 18px;
}

.desktop .img {
    position: absolute;
    width: 31px;
    height: 31px;
    top: 0;
    left: 0;
}

.desktop .text-wrapper-6 {
    position: absolute;
    width: 60px;
    top: 3px;
    left: 50px;
    font-family: "Inter-Medium", Helvetica;
    font-weight: 500;
    color: #252525;
    font-size: 16px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .group-4 {
    position: absolute;
    width: 111px;
    height: 31px;
    top: 342px;
    left: 18px;
}

.desktop .text-wrapper-7 {
    position: absolute;
    width: 59px;
    top: 3px;
    left: 50px;
    font-family: "Inter-Medium", Helvetica;
    font-weight: 500;
    color: #252525;
    font-size: 16px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .group-5 {
    position: absolute;
    width: 154px;
    height: 31px;
    top: 278px;
    left: 18px;
}

.desktop .text-wrapper-8 {
    position: absolute;
    width: 102px;
    top: 3px;
    left: 50px;
    font-family: "Inter-Medium", Helvetica;
    font-weight: 500;
    color: #252525;
    font-size: 16px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .group-6 {
    position: absolute;
    width: 147px;
    height: 31px;
    top: 409px;
    left: 18px;
}

.desktop .text-wrapper-9 {
    position: absolute;
    width: 95px;
    top: 3px;
    left: 50px;
    font-family: "Inter-Medium", Helvetica;
    font-weight: 500;
    color: #252525;
    font-size: 16px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .group-7 {
    position: absolute;
    width: 137px;
    height: 31px;
    top: 473px;
    left: 17px;
}

.desktop .text-wrapper-10 {
    position: absolute;
    width: 84px;
    top: 3px;
    left: 51px;
    font-family: "Inter-Medium", Helvetica;
    font-weight: 500;
    color: #252525;
    font-size: 16px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .group-8 {
    position: absolute;
    width: 1077px;
    height: 491px;
    top: 320px;
    left: 30px;
}

.desktop .frame-wrapper {
    position: absolute;
    width: 1075px;
    height: 428px;
    top: 63px;
    left: 0;
    background-color: #f4f4f4;
    border-radius: 11px;
}

  

.desktop .frame {
    display: flex;
    flex-wrap: wrap;
    width: 1032px;
    align-items: flex-start;
    
    position: relative;
    top: 25px;
    left: 22px;
}

.desktop .overlap-group-wrapper {
    position: relative;
    width: 318px;
    height: 177px;
}

.desktop .overlap-3 {
    position: relative;
    width: 314px;
    height: 177px;
    background-color: #ffffff;
    border-radius: 16px;
}

.desktop .text-wrapper-11 {
    position: absolute;
    top: 47px;
    left: 20px;
    font-family: "Inter-SemiBold", Helvetica;
    font-weight: 600;
    color: #0d062d;
    font-size: 18px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .brainstorming-brings {
    position: absolute;
    width: 274px;
    top: 75px;
    left: 20px;
    font-family: "Inter-Regular", Helvetica;
    font-weight: 400;
    color: #787486;
    font-size: 12px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .div-wrapper {
    position: absolute;
    width: 38px;
    height: 23px;
    top: 20px;
    left: 20px;
}

.desktop .overlap-group-3 {
    position: relative;
    width: 36px;
    height: 23px;
    background-color: #dfa87433;
    border-radius: 4px;
}

.desktop .text-wrapper-12 {
    position: absolute;
    top: 4px;
    left: 6px;
    font-family: "Inter-Medium", Helvetica;
    font-weight: 500;
    color: #d58c48;
    font-size: 12px;
    letter-spacing: 0;
    line-height: normal;
}

.desktop .group-9 {
    position: relative;
    width: 318px;
    height: 177px;
    margin-right: -4px;
}

.desktop .text-wrapper-13 {
    position: absolute;
    top: 0;
    left: 45px;
    font-family: "Poppins-Medium", Helvetica;
    font-weight: 500;
    color: #000000;
    font-size: 35px;
    letter-spacing: 0;
    line-height: normal;
}
.frame {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: repeat(3, auto);
    gap: 20px; /* Adjust the gap as needed */
    width: 100%;
    max-width: 1032px; /* Adjust the max-width as needed */
    margin: 0 auto; /* Center the grid horizontally */
  }
  
  /* Reset positioning properties */
  .overlap-group-wrapper {
    position: static;
    top: auto;
    left: auto;
  }
  
  /* Remove individual positioning properties */
  .overlap-3 {
    position: static;
  }
  
  /* Remove positioning properties */
  .group-9 {
    position: static;
  }</style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                @yield('slot')
                    <div class="desktop">
                        <div class="div">
                          <div class="group">
                            <div class="text-wrapper">Hi, Name!</div>
                            <p class="p">You’ve some tasks to do today!</p>
                          </div>
                          <div class="group-2">
                            <div class="overlap">
                              <div class="text-wrapper-2">Tasks to complete</div>
                              <p class="element"><span class="span">15</span> <span class="text-wrapper-3">/20</span></p>
                            </div>
                            <div class="overlap-group">
                              <p class="element-2"><span class="span">95</span> <span class="text-wrapper-3">%</span></p>
                              <div class="text-wrapper-4">Completion Rate</div>
                            </div>
                            <div class="overlap-group-2">
                              <p class="element-projects"><span class="span">5 </span> <span class="text-wrapper-3">projects</span></p>
                              <div class="text-wrapper-4">Projects</div>
                            </div>
                          </div>
                          <div class="group-8">
                            <div class="frame-wrapper">
                              <div class="frame">
                                <div class="overlap-group-wrapper">
                                  <div class="overlap-3">
                                    <div class="text-wrapper-11">Brainstorming</div>
                                    <p class="brainstorming-brings">
                                      Brainstorming brings team members&#39; diverse experience into play.
                                    </p>
                                    <div class="div-wrapper">
                                      <div class="overlap-group-3"><div class="text-wrapper-12">Low</div></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="overlap-group-wrapper">
                                  <div class="overlap-3">
                                    <div class="text-wrapper-11">Brainstorming</div>
                                    <p class="brainstorming-brings">
                                      Brainstorming brings team members&#39; diverse experience into play.
                                    </p>
                                    <div class="div-wrapper">
                                      <div class="overlap-group-3"><div class="text-wrapper-12">Low</div></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="group-9">
                                  <div class="overlap-3">
                                    <div class="text-wrapper-11">Brainstorming</div>
                                    <p class="brainstorming-brings">
                                      Brainstorming brings team members&#39; diverse experience into play.
                                    </p>
                                    <div class="div-wrapper">
                                      <div class="overlap-group-3"><div class="text-wrapper-12">Low</div></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="overlap-group-wrapper">
                                  <div class="overlap-3">
                                    <div class="text-wrapper-11">Brainstorming</div>
                                    <p class="brainstorming-brings">
                                      Brainstorming brings team members&#39; diverse experience into play.
                                    </p>
                                    <div class="div-wrapper">
                                      <div class="overlap-group-3"><div class="text-wrapper-12">Low</div></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="overlap-group-wrapper">
                                  <div class="overlap-3">
                                    <div class="text-wrapper-11">Brainstorming</div>
                                    <p class="brainstorming-brings">
                                      Brainstorming brings team members&#39; diverse experience into play.
                                    </p>
                                    <div class="div-wrapper">
                                      <div class="overlap-group-3"><div class="text-wrapper-12">Low</div></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="group-9">
                                  <div class="overlap-3">
                                    <div class="text-wrapper-11">Brainstorming</div>
                                    <p class="brainstorming-brings">
                                      Brainstorming brings team members&#39; diverse experience into play.
                                    </p>
                                    <div class="div-wrapper">
                                      <div class="overlap-group-3"><div class="text-wrapper-12">Low</div></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="text-wrapper-13">Projects</div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
