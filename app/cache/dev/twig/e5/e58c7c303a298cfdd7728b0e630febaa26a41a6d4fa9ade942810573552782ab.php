<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_c6c421404dda2dad3beefd40a58a91bbb6486370b2e1ba02b72ed0ff97d7f7bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_bfcc82aca13a0bd30e93a85403739d2f3e883b72e2b4dccb07ff0678c2fe0786 = $this->env->getExtension("native_profiler");
        $__internal_bfcc82aca13a0bd30e93a85403739d2f3e883b72e2b4dccb07ff0678c2fe0786->enter($__internal_bfcc82aca13a0bd30e93a85403739d2f3e883b72e2b4dccb07ff0678c2fe0786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfcc82aca13a0bd30e93a85403739d2f3e883b72e2b4dccb07ff0678c2fe0786->leave($__internal_bfcc82aca13a0bd30e93a85403739d2f3e883b72e2b4dccb07ff0678c2fe0786_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e0dd19df86116e60ab9df1b4184bd92079b4a509b09ba5353ba48a0b1c6492b = $this->env->getExtension("native_profiler");
        $__internal_5e0dd19df86116e60ab9df1b4184bd92079b4a509b09ba5353ba48a0b1c6492b->enter($__internal_5e0dd19df86116e60ab9df1b4184bd92079b4a509b09ba5353ba48a0b1c6492b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_5e0dd19df86116e60ab9df1b4184bd92079b4a509b09ba5353ba48a0b1c6492b->leave($__internal_5e0dd19df86116e60ab9df1b4184bd92079b4a509b09ba5353ba48a0b1c6492b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "@FOSUser/Group/new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
