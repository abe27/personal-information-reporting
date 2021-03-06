import React, { useEffect } from 'react'
import { Button, Input, Label, ValidationErrors } from '@/Components/Elements'
import { Guest } from '@/Layouts'
import { Head, Link, useForm } from '@inertiajs/inertia-react'

const Register = () => {
  const { data, setData, post, processing, errors, reset } = useForm({
    username: '',
    email: '',
    password: '',
    password_confirmation: '',
  })

  useEffect(() => {
    return () => {
      reset('password', 'password_confirmation')
    }
  }, [])

  const onHandleChange = (event) => {
    setData(
      event.target.name,
      event.target.type === 'checkbox'
        ? event.target.checked
        : event.target.value,
    )
  }

  const submit = (e) => {
    e.preventDefault()

    post(route('register'))
  }

  return (
    <Guest>
      <Head title="Register" />

      <ValidationErrors errors={errors} />

      <form onSubmit={submit}>
        <div>
          <Label forInput="username" value="User Name" />

          <Input
            type="text"
            name="username"
            value={data.username}
            className="mt-1 block w-full"
            autoComplete="username"
            isFocused={true}
            handleChange={onHandleChange}
            required
          />
        </div>

        <div className="mt-4">
          <Label forInput="email" value="Email" />

          <Input
            type="email"
            name="email"
            value={data.email}
            className="mt-1 block w-full"
            autoComplete="email"
            handleChange={onHandleChange}
            required
          />
        </div>

        <div className="mt-4">
          <Label forInput="password" value="Password" />

          <Input
            type="password"
            name="password"
            value={data.password}
            className="mt-1 block w-full"
            autoComplete="new-password"
            handleChange={onHandleChange}
            required
          />
        </div>

        <div className="mt-4">
          <Label forInput="password_confirmation" value="Confirm Password" />

          <Input
            type="password"
            name="password_confirmation"
            value={data.password_confirmation}
            className="mt-1 block w-full"
            handleChange={onHandleChange}
            required
          />
        </div>

        <div className="flex items-center justify-end mt-4">
          <Link
            href={route('login')}
            className="underline text-sm text-gray-600 hover:text-gray-900"
          >
            Already registered?
          </Link>

          <Button className="ml-4" processing={processing}>
            Register
          </Button>
        </div>
      </form>
    </Guest>
  )
}

export default Register
