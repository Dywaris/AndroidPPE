<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2187b933c1a7de97508ce5c6d0740d283791165dc39e7e4f6f4eb089619bccc3 extends Twig_Template
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
        $__internal_2db1ab9ff2e0664d0d8247653551655bb7b6de48231bedcfc65173768ccbb848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db1ab9ff2e0664d0d8247653551655bb7b6de48231bedcfc65173768ccbb848->enter($__internal_2db1ab9ff2e0664d0d8247653551655bb7b6de48231bedcfc65173768ccbb848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_117e8aa674caa9f37ddf7433aa1a95789884a87ca7d2db58604373a7266cb379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_117e8aa674caa9f37ddf7433aa1a95789884a87ca7d2db58604373a7266cb379->enter($__internal_117e8aa674caa9f37ddf7433aa1a95789884a87ca7d2db58604373a7266cb379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2db1ab9ff2e0664d0d8247653551655bb7b6de48231bedcfc65173768ccbb848->leave($__internal_2db1ab9ff2e0664d0d8247653551655bb7b6de48231bedcfc65173768ccbb848_prof);

        
        $__internal_117e8aa674caa9f37ddf7433aa1a95789884a87ca7d2db58604373a7266cb379->leave($__internal_117e8aa674caa9f37ddf7433aa1a95789884a87ca7d2db58604373a7266cb379_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
