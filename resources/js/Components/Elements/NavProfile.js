import React, { useState, useEffect } from 'react'
import { Spinner } from '@chakra-ui/react'

const listMenu = (menuItem) => {
  return menuItem.map((i) => (
    <li
      key={i.name}
      className="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none"
    >
      <i.icon />
      <a className="ml-2" href={route(i.href)}>{i.name}</a>
    </li>
  ))
}

const NavProfile = ({ auth, menuItem }) => {
  const [profileAvatar, setProfileAvatar] = useState(null)
  const [profile, setProfile] = useState(false)

  // https://i.pravatar.cc/300

  const getAvatar = async () => {
    await new Promise((resolve) =>
      setTimeout(() => {
        setProfileAvatar('https://i.pravatar.cc/300')
        console.log('get avatar profile on top')
        resolve()
      }, 2550),
    )
  }

  useEffect(() => {
    getAvatar()
  }, [])

  return (
    <div
      aria-haspopup="true"
      className="cursor-pointer w-full flex items-center justify-end relative"
      onClick={() => setProfile(!profile)}
    >
      {profile ? (
        <ul className="p-4 w-40 border-r bg-white absolute rounded z-40 left-0 shadow mt-64 ">
          {menuItem && listMenu(menuItem)}
        </ul>
      ) : (
        ''
      )}
      {profileAvatar && (
        <img
          className="rounded h-10 w-10 object-cover"
          src={profileAvatar}
          alt="logo"
        />
      )}
      {!profileAvatar && (
        <Spinner
          thickness="3px"
          speed="1.65s"
          emptyColor="gray.200"
          color="blue.500"
          size="lg"
        />
      )}
      <p className="text-gray-800 text-sm ml-2">{auth.user.username}</p>
    </div>
  )
}

export default NavProfile
