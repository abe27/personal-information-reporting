/* This example requires Tailwind CSS v2.0+ */
import React from 'react'
import { SkeletonLoading } from '@/Components/Elements'

const showInformation = (items) => {
  return items.map((i) => (
    <div key={i.name}>
      <div className="bg-gray-50 px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt className="text-sm font-medium text-gray-500">{i.name}</dt>
        <dd className="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {i.value}
        </dd>
      </div>
    </div>
  ))
}

const Information = ({ title, items }) => {
  console.dir(items)
  return (
    <>
      {!items && <SkeletonLoading />}
      {items && (
        <div className="bg-white overflow-hidden sm:rounded-lg">
          <div className="px-4 py-2 sm:px-6">
            <h4 className="text-lg leading-6 font-medium text-gray-900">
              {title}
            </h4>
          </div>
          <div className="border-t border-gray-200">
            {showInformation(items)}
          </div>
        </div>
      )}
    </>
  )
}

export default Information
