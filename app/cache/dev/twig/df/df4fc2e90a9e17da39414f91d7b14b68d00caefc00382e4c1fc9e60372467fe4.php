<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_09589ad516c8fc367f163db806cc1cc1e74e9ad1ae35a2e552881a1f1230dd3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_529c1003c85e3f12c1336298c7a9e9387568f8127218a526cabaa46655404bea = $this->env->getExtension("native_profiler");
        $__internal_529c1003c85e3f12c1336298c7a9e9387568f8127218a526cabaa46655404bea->enter($__internal_529c1003c85e3f12c1336298c7a9e9387568f8127218a526cabaa46655404bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_529c1003c85e3f12c1336298c7a9e9387568f8127218a526cabaa46655404bea->leave($__internal_529c1003c85e3f12c1336298c7a9e9387568f8127218a526cabaa46655404bea_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45f0a5a8724b4d265d6bcb633bf64f66081c1858bc0724788fd81e35e88ae8fd = $this->env->getExtension("native_profiler");
        $__internal_45f0a5a8724b4d265d6bcb633bf64f66081c1858bc0724788fd81e35e88ae8fd->enter($__internal_45f0a5a8724b4d265d6bcb633bf64f66081c1858bc0724788fd81e35e88ae8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_45f0a5a8724b4d265d6bcb633bf64f66081c1858bc0724788fd81e35e88ae8fd->leave($__internal_45f0a5a8724b4d265d6bcb633bf64f66081c1858bc0724788fd81e35e88ae8fd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
