<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_3f2d75fb1f30114936c3c05baf94f86120af119af43d7013cbd2c1eb48a5c5fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3a5c5fac8217916df31e6a91849c23a3370b4123bda3cadc114ad6081d5ef7e = $this->env->getExtension("native_profiler");
        $__internal_d3a5c5fac8217916df31e6a91849c23a3370b4123bda3cadc114ad6081d5ef7e->enter($__internal_d3a5c5fac8217916df31e6a91849c23a3370b4123bda3cadc114ad6081d5ef7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d3a5c5fac8217916df31e6a91849c23a3370b4123bda3cadc114ad6081d5ef7e->leave($__internal_d3a5c5fac8217916df31e6a91849c23a3370b4123bda3cadc114ad6081d5ef7e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a786a01a685d6cb5ab1764e09cbfc4dd75348ad687134cb414827eab2b0997a8 = $this->env->getExtension("native_profiler");
        $__internal_a786a01a685d6cb5ab1764e09cbfc4dd75348ad687134cb414827eab2b0997a8->enter($__internal_a786a01a685d6cb5ab1764e09cbfc4dd75348ad687134cb414827eab2b0997a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_a786a01a685d6cb5ab1764e09cbfc4dd75348ad687134cb414827eab2b0997a8->leave($__internal_a786a01a685d6cb5ab1764e09cbfc4dd75348ad687134cb414827eab2b0997a8_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d8a6af05993787dd0bc960abddb0ff8dcdce6fe233979a9c3a4319cbfb42cd7d = $this->env->getExtension("native_profiler");
        $__internal_d8a6af05993787dd0bc960abddb0ff8dcdce6fe233979a9c3a4319cbfb42cd7d->enter($__internal_d8a6af05993787dd0bc960abddb0ff8dcdce6fe233979a9c3a4319cbfb42cd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d8a6af05993787dd0bc960abddb0ff8dcdce6fe233979a9c3a4319cbfb42cd7d->leave($__internal_d8a6af05993787dd0bc960abddb0ff8dcdce6fe233979a9c3a4319cbfb42cd7d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4814d796170fe29252a5f03f3e9242c2383b47a27e1c54a9b7f10cdc9b4fc7c2 = $this->env->getExtension("native_profiler");
        $__internal_4814d796170fe29252a5f03f3e9242c2383b47a27e1c54a9b7f10cdc9b4fc7c2->enter($__internal_4814d796170fe29252a5f03f3e9242c2383b47a27e1c54a9b7f10cdc9b4fc7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4814d796170fe29252a5f03f3e9242c2383b47a27e1c54a9b7f10cdc9b4fc7c2->leave($__internal_4814d796170fe29252a5f03f3e9242c2383b47a27e1c54a9b7f10cdc9b4fc7c2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {%- autoescape false -%}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {%- endautoescape -%}*/
/* {% endblock %}*/
/* */
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
