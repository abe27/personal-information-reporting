import React, { useState } from 'react'
import { NavMenuMobile, NavMenu, NavPanelMobile } from '@/Components/Elements'
import { Link } from '@inertiajs/inertia-react'
import {
  ProfileIcon,
  SeachIcon,
  SettingIcon,
  LogOutIcon,
  ApplicationLogo,
  BellIcon,
} from '@/Components/Icons'
import { NavProfile } from '@/Components/Elements'

const menuItem = [
  { name: 'Dashboard', href: 'dashboard.index', icon: 'dashboard' },
  { name: 'Time Attendance', href: 'attendance.index', icon: 'dashboard' },
  { name: 'Training', href: 'training.index', icon: 'dashboard' },
  { name: '5S Activity', href: 'activity.index', icon: 'dashboard' },
  { name: 'Accident', href: 'accident.index', icon: 'dashboard' },
  { name: 'Webboard', href: 'webboard.index', icon: 'dashboard' },
]

const menuProfile = [
  { name: 'My Profile', href: 'profile.index', icon: ProfileIcon },
  // { name: 'Help Center', href: 'dashboard.index', icon: HelpIcon },
  { name: 'System Setting', href: 'dashboard.index', icon: SettingIcon },
  { name: 'Sign Out', href: 'logout', icon: LogOutIcon },
]

const Authenticated = ({ auth, header, children }) => {
  return (
    <>
      <div className="absolute bg-gray-200 w-full h-full">
        {/* Navigation starts */}
        {/* Mobile */}
        <NavMenuMobile />
        {/* Mobile */}
        <nav className="w-full mx-auto bg-white shadow">
          <div className="container px-6 justify-between h-16 flex items-center lg:items-stretch mx-auto">
            <div className="h-full flex items-center">
              <div className="mr-10 flex items-center">
                <Link href="/">
                  <ApplicationLogo className="block w-auto text-gray-500" />
                </Link>
              </div>
              <NavMenu menuItem={menuItem} />
            </div>
            <div className="h-full xl:flex items-center justify-end hidden">
              <div className="w-full h-full flex items-center">
                <div className="w-full pr-12 h-full flex items-center border-r">
                  <div className="relative w-full">
                    <div className="text-gray-500 absolute ml-3 inset-0 m-auto w-4 h-4">
                      <SeachIcon width="16" height="16" />
                    </div>
                    <input
                      className="border border-gray-100 focus:outline-none focus:border-indigo-700 w-56 rounded text-sm text-gray-500 bg-gray-100 pl-8 py-2"
                      type="text"
                      placeholder="Search"
                    />
                  </div>
                </div>
                <div className="w-full h-full flex">
                  <div className="w-32 h-full flex items-center justify-center border-r cursor-pointer text-gray-600">
                    <BellIcon width="32" height="32"/>
                  </div>
                  {/* import element profile */}
                  <NavProfile auth={auth} menuItem={menuProfile} />
                </div>
              </div>
            </div>
            {/* import panel when md screen */}
            <NavPanelMobile />
          </div>
        </nav>
        {/* Navigation ends */}
        {/* Page title starts */}
        {header && (
          <header className="bg-white shadow">
            <div className="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
              {header}
            </div>
          </header>
        )}
        {/* Page title ends */}
        <main>{children}</main>
      </div>
    </>
  )
}

export default Authenticated
