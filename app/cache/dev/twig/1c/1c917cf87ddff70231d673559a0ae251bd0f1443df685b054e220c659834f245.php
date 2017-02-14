<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_75ed0966792ffcb5d18cdf2c2d6cb98f751d296f8b1b2db895a8c0e7489f6c75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7c1616bfa7df09226826e3e5cd9fed09510ddc02ec98efe51031d13ab7bf3af = $this->env->getExtension("native_profiler");
        $__internal_e7c1616bfa7df09226826e3e5cd9fed09510ddc02ec98efe51031d13ab7bf3af->enter($__internal_e7c1616bfa7df09226826e3e5cd9fed09510ddc02ec98efe51031d13ab7bf3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e7c1616bfa7df09226826e3e5cd9fed09510ddc02ec98efe51031d13ab7bf3af->leave($__internal_e7c1616bfa7df09226826e3e5cd9fed09510ddc02ec98efe51031d13ab7bf3af_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
