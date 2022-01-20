import React, { useState } from 'react'

const NavMenu = ({ menuItem }) => {
  return (
    <ul className="xl:flex items-center h-full space-x-8 hidden">
      {menuItem &&
        menuItem.map((i) => (
          <li
            key={i.name}
            className={`hover:text-cyan-800 cursor-pointer h-full flex items-center text-sm ${
              route().current(i.href)
                ? 'text-cyan-800 border-b-2 border-cyan-700 font-bold'
                : 'text-gray-800'
            } tracking-normal`}
          >
            <a href={route(i.href)}>{i.name}</a>
          </li>
        ))}
    </ul>
  )
}

// {/* <li key={i.name} className="cursor-pointer h-full flex items-center text-sm text-indigo-700 tracking-normal border-b-2 border-indigo-700">
//             {i.name}
//           </li> */}

export default NavMenu
