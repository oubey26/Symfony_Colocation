<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_e6361e8fee992d91947fdc34ffbe122b7ba42638be2a61c5cea429ea0769c8f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9158c9c033bf9c770d807beff095c024cc3a051b2aa6f7023c814f7ff2b57118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9158c9c033bf9c770d807beff095c024cc3a051b2aa6f7023c814f7ff2b57118->enter($__internal_9158c9c033bf9c770d807beff095c024cc3a051b2aa6f7023c814f7ff2b57118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_cfd9234a93289c6e7c0bf74daa6b70c9f9b53489a0419d42e1fbac53e1c0a7b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd9234a93289c6e7c0bf74daa6b70c9f9b53489a0419d42e1fbac53e1c0a7b6->enter($__internal_cfd9234a93289c6e7c0bf74daa6b70c9f9b53489a0419d42e1fbac53e1c0a7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_9158c9c033bf9c770d807beff095c024cc3a051b2aa6f7023c814f7ff2b57118->leave($__internal_9158c9c033bf9c770d807beff095c024cc3a051b2aa6f7023c814f7ff2b57118_prof);

        
        $__internal_cfd9234a93289c6e7c0bf74daa6b70c9f9b53489a0419d42e1fbac53e1c0a7b6->leave($__internal_cfd9234a93289c6e7c0bf74daa6b70c9f9b53489a0419d42e1fbac53e1c0a7b6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9058a9d7db2a862bfd597ea7df4f6dde3147a5c1691ed1b2af536061a708a11f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9058a9d7db2a862bfd597ea7df4f6dde3147a5c1691ed1b2af536061a708a11f->enter($__internal_9058a9d7db2a862bfd597ea7df4f6dde3147a5c1691ed1b2af536061a708a11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ccbb4ce0048426d2791b714dcc44d4e6a511e417780c87d6a28a6e6bcbcda94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccbb4ce0048426d2791b714dcc44d4e6a511e417780c87d6a28a6e6bcbcda94d->enter($__internal_ccbb4ce0048426d2791b714dcc44d4e6a511e417780c87d6a28a6e6bcbcda94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ccbb4ce0048426d2791b714dcc44d4e6a511e417780c87d6a28a6e6bcbcda94d->leave($__internal_ccbb4ce0048426d2791b714dcc44d4e6a511e417780c87d6a28a6e6bcbcda94d_prof);

        
        $__internal_9058a9d7db2a862bfd597ea7df4f6dde3147a5c1691ed1b2af536061a708a11f->leave($__internal_9058a9d7db2a862bfd597ea7df4f6dde3147a5c1691ed1b2af536061a708a11f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c2186786d36b37bb64425cc76928f4d0c068715823ae8a029e6a22c78d11be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c2186786d36b37bb64425cc76928f4d0c068715823ae8a029e6a22c78d11be9->enter($__internal_9c2186786d36b37bb64425cc76928f4d0c068715823ae8a029e6a22c78d11be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_518128899021231499a1abb5ae296e88d56fd3989c88335d4229aaa25bdc307e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518128899021231499a1abb5ae296e88d56fd3989c88335d4229aaa25bdc307e->enter($__internal_518128899021231499a1abb5ae296e88d56fd3989c88335d4229aaa25bdc307e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_518128899021231499a1abb5ae296e88d56fd3989c88335d4229aaa25bdc307e->leave($__internal_518128899021231499a1abb5ae296e88d56fd3989c88335d4229aaa25bdc307e_prof);

        
        $__internal_9c2186786d36b37bb64425cc76928f4d0c068715823ae8a029e6a22c78d11be9->leave($__internal_9c2186786d36b37bb64425cc76928f4d0c068715823ae8a029e6a22c78d11be9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_97d45311311e7aad17e331ce23334ce138a6b05c26fa632988c09540723f058d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d45311311e7aad17e331ce23334ce138a6b05c26fa632988c09540723f058d->enter($__internal_97d45311311e7aad17e331ce23334ce138a6b05c26fa632988c09540723f058d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_919088cd2d7a96dd4a06740311087c6e66fed1dd2e08e54503404ef6da976571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_919088cd2d7a96dd4a06740311087c6e66fed1dd2e08e54503404ef6da976571->enter($__internal_919088cd2d7a96dd4a06740311087c6e66fed1dd2e08e54503404ef6da976571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_919088cd2d7a96dd4a06740311087c6e66fed1dd2e08e54503404ef6da976571->leave($__internal_919088cd2d7a96dd4a06740311087c6e66fed1dd2e08e54503404ef6da976571_prof);

        
        $__internal_97d45311311e7aad17e331ce23334ce138a6b05c26fa632988c09540723f058d->leave($__internal_97d45311311e7aad17e331ce23334ce138a6b05c26fa632988c09540723f058d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
