<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_cface13e416f224a54bdfc6bd4b6ee25ca9cdef782c1838384370d5117e98dc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_88b05faf8da222d022c1b829a32a519f2e870ceeb9eef4337fa722392c21cdf8 = $this->env->getExtension("native_profiler");
        $__internal_88b05faf8da222d022c1b829a32a519f2e870ceeb9eef4337fa722392c21cdf8->enter($__internal_88b05faf8da222d022c1b829a32a519f2e870ceeb9eef4337fa722392c21cdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88b05faf8da222d022c1b829a32a519f2e870ceeb9eef4337fa722392c21cdf8->leave($__internal_88b05faf8da222d022c1b829a32a519f2e870ceeb9eef4337fa722392c21cdf8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a2d5eef7c207912baf1b45be48b4e480465bf125a5a58deb45a23bc2dd4c8d1 = $this->env->getExtension("native_profiler");
        $__internal_7a2d5eef7c207912baf1b45be48b4e480465bf125a5a58deb45a23bc2dd4c8d1->enter($__internal_7a2d5eef7c207912baf1b45be48b4e480465bf125a5a58deb45a23bc2dd4c8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7a2d5eef7c207912baf1b45be48b4e480465bf125a5a58deb45a23bc2dd4c8d1->leave($__internal_7a2d5eef7c207912baf1b45be48b4e480465bf125a5a58deb45a23bc2dd4c8d1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
