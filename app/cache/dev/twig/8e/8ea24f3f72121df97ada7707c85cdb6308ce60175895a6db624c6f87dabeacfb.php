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
        $__internal_e7afd5f0f3f9b62af1bfd9de885b2c829b9a0cf4671be9ddb6367e243e53f2a8 = $this->env->getExtension("native_profiler");
        $__internal_e7afd5f0f3f9b62af1bfd9de885b2c829b9a0cf4671be9ddb6367e243e53f2a8->enter($__internal_e7afd5f0f3f9b62af1bfd9de885b2c829b9a0cf4671be9ddb6367e243e53f2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7afd5f0f3f9b62af1bfd9de885b2c829b9a0cf4671be9ddb6367e243e53f2a8->leave($__internal_e7afd5f0f3f9b62af1bfd9de885b2c829b9a0cf4671be9ddb6367e243e53f2a8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3146d60dcfd6b12817c43281b7a30ecdef7068f917d1c9535f403c7d781d6f4b = $this->env->getExtension("native_profiler");
        $__internal_3146d60dcfd6b12817c43281b7a30ecdef7068f917d1c9535f403c7d781d6f4b->enter($__internal_3146d60dcfd6b12817c43281b7a30ecdef7068f917d1c9535f403c7d781d6f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3146d60dcfd6b12817c43281b7a30ecdef7068f917d1c9535f403c7d781d6f4b->leave($__internal_3146d60dcfd6b12817c43281b7a30ecdef7068f917d1c9535f403c7d781d6f4b_prof);

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
