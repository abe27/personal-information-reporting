import React, { useState, useEffect } from 'react'
import { Authenticated } from '@/Layouts'
import { Head } from '@inertiajs/inertia-react'
import { Image } from '@chakra-ui/react'
import { Information } from '@/Components/Profiles'

const Profile = (props) => {
  const [profile, setProfile] = useState(null)
  const [education, setEducation] = useState(null)
  const [address, setAddress] = useState(null)
  const [job, setJob] = useState(null)
  const [talent, setTalent] = useState(null)
  const [leave, setLeave] = useState(null)

  const getProfile = async () => {
    let x = new Promise((resolve, reject) => {
      const obj = [
        { name: 'Full Name', value: 'Mr.Sunchai Kauy-yung' },
        { name: 'Employee Code', value: '30007' },
        { name: 'EMail Address', value: 'sunchai@seiwa-pioneer.com' },
        { name: 'Mobile Phone No.', value: '000-0000-0000' },
      ]
      setTimeout(() => resolve(obj), 2500)
    })

    x.then((r) => {
      console.log(r)
      setProfile(r)
    })
  }

  const getEducation = async () => {
    let x = new Promise((resolve, reject) => {
      const obj = [
        { name: 'Education', value: 'Bachelor of Business Administration Program in Business Administration.' },
        { name: 'From', value: 'The university of arizona' },
        { name: 'From Year', value: '1998' },
        { name: 'GPA.', value: '1.99' },
      ]
      setTimeout(() => resolve(obj), 2000)
    })

    x.then((r) => {
      console.log(r)
      setEducation(r)
    })
  }

  const getAddress = async () => {
    let x = new Promise((resolve, reject) => {
      const obj = [
        { name: 'Address line 1', value: 'Ex tempor excepteur reprehenderit in laborum fugiat ad culpa.'  },
        { name: 'Address line 2', value: '-' },
        { name: 'District', value: 'The muang district' },
        { name: 'Province', value: 'The Province' },
        { name: 'Zip Code', value: '10000' },
      ]
      setTimeout(() => resolve(obj), 4000)
    })

    x.then((r) => {
      console.log(r)
      setAddress(r)
    })
  }

  const getJob = async () => {
    let x = new Promise((resolve, reject) => {
      const obj = [
        { name: 'Position', value: 'IT Support' },
        { name: 'Section', value: 'IT' },
        { name: 'Start At', value: '01/02/2021' },
        { name: 'Salary', value: 100 },
      ]
      setTimeout(() => resolve(obj), 6000)
    })

    x.then((r) => {
      console.log(r)
      setJob(r)
    })
  }

  const getTalent = async () => {
    let x = new Promise((resolve, reject) => {
      const obj = [
        { name: 'Can Drive', value: 'Yes' },
        { name: 'Have Diver license', value: 'Yes' },
        { name: 'Can Drive Forklift', value: 'No' },
        { name: 'Have Forklift Lincense', value: '-' },
        { name: 'ETC.', value: '-' },
      ]
      setTimeout(() => resolve(obj), 4000)
    })

    x.then((r) => {
      console.log(r)
      setTalent(r)
    })
  }

  const getLeave = async () => {
    let x = new Promise((resolve, reject) => {
      const obj = [
        {name: 'Business leave(5 Day)', value: '3',},
        {name: 'Vacation leave(5 Day)', value: '0',},
        {name: 'Military Leave(60 Day)', value: '-',},
        {name: 'Maternity Leave(90 Day)', value: '-',},
        {name: 'Ordination Leave(15 Day)', value: '-',},
        {name: 'Sick Leave(30 Day)', value: '-',},
        {name: 'Birth Day Leave(1 Day)', value: '-',},
        {name: 'Married Leave(1 Day)', value: '-',},
      ]
      setTimeout(() => resolve(obj), 3000)
    })

    x.then((r) => {
      console.log(r)
      setLeave(r)
    })
  }

  useEffect(() => {
    getProfile(), getEducation(), getAddress(), getJob(), getTalent(), getLeave()
  }, [])

  return (
    <Authenticated auth={props.auth} errors={props.errors}>
      <Head title={`Profile ${props.auth.user.username}`} />
      <div className="my-6 lg:my-12 container px-6 mx-auto flex flex-col lg:flex-row items-start lg:items-center justify-between pb-4 border-b border-gray-300">
        <div>
          <h4 className="text-2xl font-bold leading-tight text-gray-800">
            User {} Profile
          </h4>
          <ul className="flex flex-col md:flex-row items-start md:items-center text-gray-600 text-sm mt-3">
            <li className="flex items-center mr-3 mt-3 md:mt-0">
              <span className="mr-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  className="icon icon-tabler icon-tabler-paperclip"
                  width={16}
                  height={16}
                  viewBox="0 0 24 24"
                  strokeWidth="1.5"
                  stroke="currentColor"
                  fill="none"
                  strokeLinecap="round"
                  strokeLinejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" />
                  <path d="M15 7l-6.5 6.5a1.5 1.5 0 0 0 3 3l6.5 -6.5a3 3 0 0 0 -6 -6l-6.5 6.5a4.5 4.5 0 0 0 9 9 l6.5 -6.5" />
                </svg>
              </span>
              <span>Active</span>
            </li>
            <li className="flex items-center mr-3 mt-3 md:mt-0">
              <span className="mr-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  className="icon icon-tabler icon-tabler-trending-up"
                  width={16}
                  height={16}
                  viewBox="0 0 24 24"
                  strokeWidth="1.5"
                  stroke="currentColor"
                  fill="none"
                  strokeLinecap="round"
                  strokeLinejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" />
                  <polyline points="3 17 9 11 13 15 21 7" />
                  <polyline points="14 7 21 7 21 14" />
                </svg>
              </span>
              <span> Trending</span>
            </li>
            <li className="flex items-center mt-3 md:mt-0">
              <span className="mr-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  className="icon icon-tabler icon-tabler-plane-departure"
                  width={16}
                  height={16}
                  viewBox="0 0 24 24"
                  strokeWidth="1.5"
                  stroke="currentColor"
                  fill="none"
                  strokeLinecap="round"
                  strokeLinejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" />
                  <path
                    d="M15 12h5a2 2 0 0 1 0 4h-15l-3 -6h3l2 2h3l-2 -7h3z"
                    transform="rotate(-15 12 12) translate(0 -1)"
                  />
                  <line x1={3} y1={21} x2={21} y2={21} />
                </svg>
              </span>
              <span>Started on 29 Jan 2020</span>
            </li>
          </ul>
        </div>
        <div className="mt-6 lg:mt-0">
          <button className="mx-2 my-2 bg-white transition duration-150 ease-in-out focus:outline-none hover:bg-gray-100 rounded text-indigo-700 px-6 py-2 text-sm">
            Back
          </button>
          <button className="transition duration-150 ease-in-out hover:bg-indigo-600 focus:outline-none border bg-indigo-700 rounded text-white px-8 py-2 text-sm">
            Edit Profile
          </button>
        </div>
      </div>

      <div className="container mx-auto px-6">
        <div className="w-full h-64 rounded border-gray-300">
          <div className="flex flex-row space-x-4">
            <div className="p-2 flex-none max-w-7xl w-auto">
              <div className="drop-shadow rounded">
                <Image
                  boxSize="305px"
                  src="https://i.pravatar.cc/400"
                  alt="Dan Abramov"
                />
              </div>
            </div>
            <div className="p-2 grow ">
              <Information title="Applicant Information" items={profile} />
            </div>
          </div>
          <div className="space-x-2">
            <div className="grid grid-flow-row auto-rows-max">
              <div className="p-2">
                <Information title="Address Information" items={address} />
              </div>
              <div className="p-2 mt-4">
                <Information title="Education Information" items={education} />
              </div>
              <div className="p-2 mt-4">
                <Information title="Job Information" items={job} />
              </div>
              <div className="p-2 mt-4">
                <Information title="Talent Information" items={talent} />
              </div>
              <div className="p-2 mt-4">
                <Information title="Leave Information" items={leave}/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </Authenticated>
  )
}

export default Profile
