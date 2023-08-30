import React from 'react'
import ParrillaContent from '../OrderContent/ParrillaContent';
function ParrillaProps() {
  return (
<div className="flex items-center w-[95%] justify-center">
        <div className="container">
          <table className="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
            <thead className="text-white">

                <tr className="bg-secondary flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                  <th className="p-3 text-left">Realizado por</th>
                  <th className="p-3 text-left">Complemento 1</th>
                  <th className="p-3 text-left" >
                    Complemento 2
                  </th>
                  <th className="p-3 text-left" >
                    Acciones
                  </th>
                </tr>
            </thead>
            
          <tbody className="flex-1 sm:flex-none text-[#414141]">

            <ParrillaContent  nameuser="José Costillas" platillo="Desayuno" content1="Arroz" content2="Chimol" />

          </tbody>
          </table>
        </div>
      </div>
  )
}

export default ParrillaProps